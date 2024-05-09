<?php

namespace VPPP;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class App
{
    private Container $container;

    public function __construct()
    {
        $this->creatingContainer();
        $this->registerServices(new ServicesProvider());

    }

    public function creatingContainer(): void
    {
        $this->container = new Container();
    }

    public function getContainer() :Container
    {
        return $this->container;
    }

    public function registerServices(ServiceProviderInterface $provider): void
    {
        $this->container->register($provider);
    }

    public function get(string $id): mixed
    {
        return $this->container[$id];
    }
}