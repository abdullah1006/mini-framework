<?php

use application\controllers\userController;
use FastRoute\RouteCollector;

return FastRoute\simpleDispatcher(function(RouteCollector $r) {
    $r->addRoute('GET', '/', function() {
        return (new userController) -> index();
    });
     
});