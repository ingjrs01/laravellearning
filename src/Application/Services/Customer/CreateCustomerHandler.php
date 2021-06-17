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
     
     public function __invoke($command)
     {
        $customer = CustomerEntity(
            $command->getName(),
            $command->getEmail()
        );
        $this->repository->save($article);
     }
}