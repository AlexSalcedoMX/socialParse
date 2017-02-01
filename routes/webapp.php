<?php

Route::group(['namespace'=>'Webapp'], function (){

    Route::get('/', 'DashboardController@index')->name('webapp.index');
    Route::get('locked/{accion?}', 'LockedController@index')->name('account.locked');
    Route::get('cerrar-sesion', 'HelpersController@cerrarSesion')->name('webapp.logout');

    Route::get('redes-sociales', 'RedesSocialesController@index')->name('webapp.redesSociales');

    Route::group(['namespace'=>'SocialAuth', 'prefix'=>'social-auth'], function (){
        Route::get('twitter', 'TwitterAuthController@redirectToProvider')->name('auth.twitter');
        Route::get('twitter/callback', 'TwitterAuthController@handleProviderCallback')->name('auth.callback.twitter');
    });

    //Twitter
    Route::group(['prefix'=>'twitter'], function (){
        Route::get('campaigns', 'Twitter\TwitterCampaignsController@index')->name('twitter.campaigns');
        Route::post('create/campaign', 'Twitter\TwitterCampaignsController@createCampaign')->name('twitter.create.campaign');
        Route::get('board/campaign', 'Twitter\TwitterCampaignsController@index')->name('twitter.board.campaign');
    });

    //Boards
    Route::group(['prefix'=>'board'], function (){
        Route::get('twitter/{twitterCampaignId}/{strCampaign?}', 'Board\TwitterBoardController@index')->name('twitter.board');
    });
    //Development
    Route::get('board/twitter/{id}', 'Board\TwitterBoardController@index')->name('twitter.dev.board');


});
