<?php

namespace DC\SilexStarterPack\Controller\Admin;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Index implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        // default route
        $controllers->get('/', function() use ($app) {
            return $app['twig']->render('admin/index.twig');
        })->bind('admin.index');

        return $controllers;
    }
}