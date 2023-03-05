<?php 
use App\Controller\HomePageControler;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('home', '/')
        // the controller value has the format [controller_class, method_name]
        ->controller([HomePageControler::class, 'index']);



        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;
};