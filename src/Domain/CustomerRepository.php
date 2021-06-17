<?php

namespace MiAplicacion\Domain;

interface CustomerRepository
{
    public function save(CustomerEntity $customer):void;
    
}