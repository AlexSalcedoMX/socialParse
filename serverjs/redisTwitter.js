var config = {
        redisConf: {
            host: '127.0.0.1', // The redis's server ip
            port: '7777'
        }
    },
    Redis = require('ioredis'),
    redis = new Redis(config.redisConf),
    Twitter = require('node-tweet-stream'),
    twitter = new Twitter({
        consumer_key: '',
        consumer_secret: '',
        token: '',
        token_secret: ''
    }),
    ttwext = require('twitter-text'),
    Pusher = require('pusher'),
    pusher = new Pusher({
        appId: '',
        key: '',
        secret: '',
        encrypted: true
    });


redis.subscribe('twitter:tracking', function(err, count) {

});

redis.on('message', function(channel, obj) {
    var o = JSON.parse(obj);
    console.log(o);
    twitter.track(o.data.track);
});

twitter.on('tweet', function (t) {
    console.log('tweet received', t.id);
    pusher.trigger('test-channel', 'tweet', {
        "id": t.id,
        "id_str": t.id_str,
        "text":t.text,
        "username": t.user.screen_name,
        "nombre": t.user.name,
        "avatar": t.user.profile_image_url_https,
        "verified": t.user.verified
    });
});

twitter.on('error', function (err) {
    console.log('Oh no');
});