<?php

namespace MiAplicacion\Application\Services\Customer;

use MiAplicacion\Application\Contracts\Command;

final class CreateCustomerCommand extends Command
{
    private $name;
    private $email; 

    public function __construct(string $name,string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getEmail():string
    {
        return $this->email;
    }
    
}