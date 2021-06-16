<?php

namespace MiAplicacion\Application\Bus\Contracts;

interface Container
{
    public function make($class);
}