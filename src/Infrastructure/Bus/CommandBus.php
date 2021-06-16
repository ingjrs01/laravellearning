<?php


namespace MiAplicacion\Infrastructure\Bus;

use MiAplicacion\Infrastructure\Bus\Contracts\CommandBus;
use MiAplicacion\Aplication\Bus\Contracts\Container;
use MiAplicacion\Aplication\Contracts\Command;

final class SimpleCommandBus implements CommandBus 
{
    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'Handler';

    private $container;


    public __construct(Container $container)
    {
        $this->container = $container;
    }

    public function execute($command)
    {
        $this->resolveHandler($command)->__invoke($command);

    }

    private function revolveHandler(Command $command)
    {
        $this->container->make($this->getHandlerClass($command));
    }

    private function getHandlerClass(Command $command):string
    {
        return str_replace(
            self::COMMAND_PREFIX,
            self::HANDLER_PREFIX,
            get_class($command)
        );
    }
}