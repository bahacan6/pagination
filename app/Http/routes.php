<?php

Route::group(['middleware' => ['web']], function () {

    Route::paginate('/usersList', [ 'as' => 'usersList', 'uses' => 'Home@usersList' ] );

});

