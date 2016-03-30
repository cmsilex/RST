<?php

namespace CMSilex\ServiceProviders;

use Gregwar\RST\Builder;
use Silex\Application;
use Silex\ServiceProviderInterface;

class RSTServiceProvider implements ServiceProviderInterface
{
    public function register( Application $app ) {
        $app['rst'] = $app->share(function () {
            return new Builder();
        });
    }

    public function boot( Application $app ) {
        // TODO: Implement boot() method.
    }
}