var alto =  $('#brandWrapper').innerHeight();
var pdtb = 23;
var fh = 70;

new Fingerprint2().get(function(r, c){
    $('meta[name=fingerprint]').attr('content', r);
});

$(function() {

    var appHeader = $('.app-head-content');

    var header = document.querySelector('.app-head-content'),
        title = document.querySelector('.app-head-content .title'),
        main = document.querySelector('.app-head-subcontent'),
        icon = document.querySelector('i'),
        header_height = alto,

        fixit = 'isFixed';

    function scrollMaterial(e){

        if( window.pageYOffset < 40 &&  window.pageYOffset > 0 ) {

            header.classList.add(fixit);
            main.style.paddingTop = header_height - window.pageYOffset+'px';
            title.style.paddingTop = alto - window.pageYOffset + 'px';

        } else if ( window.pageYOffset === 0 ){
            header.classList.remove(fixit);
            header.style.paddingBottom = pdtb+'px';
            header.style.paddingTop = pdtb+'px';
            appHeader.css('height', alto );

            main.style.paddingTop = '10px';
            title.style.paddingTop = 0;
            title.style.fontSize = '18px';

        }

        if (window.pageYOffset > 40){
            header.style.height = '70px';
            main.style.paddingTop = 0;
            title.style.paddingTop = 0;
        }

    }

    window.addEventListener('scroll', scrollMaterial, false);

});