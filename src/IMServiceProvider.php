<?php

namespace CTL\XMPPMessageBase;

use BirknerAlex\XMPPHP\XMPP;
use Illuminate\Support\ServiceProvider;

class IMServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('IM', function(){
            // Configuration variables for XMPP
            $host = config('services.xmpp.host');
            $port = config('services.xmpp.port');
            $user = config('services.xmpp.user');
            $password = config('services.xmpp.password');
            $resource = \Session::getId();

            $im = new XMPP(
                $host, $port, $user, $password, $resource
            );

            $im->connect();
            $im->processUntil('session_started', 1);

            return $im;
        });


    }

    /**
     * [provides description]
     * @return void
     */
    public function provides(){
        return ['IM'];
    }

}
