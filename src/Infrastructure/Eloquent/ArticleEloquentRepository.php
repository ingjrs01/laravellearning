<?php

namespace MiAplicacion\Infrastructure\Eloquent;

use \App\Customer;
use MiAplicacion\Domain\CustomerEntity;
use MiAplicacion\Domain\CustomerRepository;

final class CustomerEloquentRepository implements CustomerEloquentRepository
{
    private $model;
    
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }
    
    public function save(CustomerEntity $customer):void
    {
        $this->model->create($customer);
    }
}