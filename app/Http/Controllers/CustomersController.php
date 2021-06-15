<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Request\StoreCustomerRequest;
use MiAplicacion\Application\Services\Customer\CreateCustomerCommand;
use MiAplicacion\Application\Infrastructure\Bus\Contracts\CommandBus;

class CustomersController extends Controller
{
	private $commandBus;

	public function __construct(CommandBus $commandBus) 
	{
		$this->commandBus = $commandBus;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dd("Devolviendo listado");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
	    $command = new CreateCustomerCommand(
		    $request->input('name'),
		    $request->input('email')
	    );
	    $this->commandBus->execute($command);

	    return response()->json(['result'=>'Cliente Creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return dd("Mostrando el registro");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return dd("Aqúi deberíamos editar");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
