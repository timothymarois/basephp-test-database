<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Use this file to register new routes for your application.
|
*/

// this route will define the "/" home page of your application
route()->middleware(['session'],function(){
    route('/','Welcome::index');
});



route()->middleware(['test1','test2'],function(){

    route()->middleware(['test3'],function(){

        route()->prefix('/level',function(){
            route('/one','Welcome::index');
        });

        route('/test123','Welcome::index');
    });

    route('/test12','Welcome::index');
});


route('/nothing','Welcome::index');


route()->middleware('ware0',function(){
    route()->prefix('p1',function(){

        route()->middleware('ware1',function(){
            route('/pend','Welcome::index');
            route('/pend2','Welcome::index');

            route()->prefix('p2',function(){
                route('/pending','Welcome::index');
            });

        });

    });
});

route()->domain('onlinefun.com',function(){

    route()->domain('test.onlinefun.com',function(){
        route('/another/nothing','Welcome::index');
    });

    route('/another/single','Welcome::index');
});

/*

route()->prefix('/api',function(){

    route()->prefix('v1',function(){

        route('maps',function(){
            return 'API';
        });

    });

});
*/
