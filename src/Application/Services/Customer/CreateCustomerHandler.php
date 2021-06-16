<?php

namespace MiAplicacion\Application\Services\Customer;

use MiAplicacion\Domain\CustomerEntity;
use MiAplicacion\Domain\CustomerRepository;

final class CreateArticleHandler implements Handler
{
     private $repository;

     public function __construct(CustomerRepository $repository)
     {
         $this->repository;
     }
}