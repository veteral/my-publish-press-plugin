<?php

namespace VPPP;

use VPPP\Test;
use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ServicesProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['test'] = function ($c) {
            return new Test();
        };
    }
}