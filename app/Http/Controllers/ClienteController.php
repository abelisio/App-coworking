<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    private $cliente;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        return $this->cliente->paginate(10);
    }

    public function show($cliente)
    {
        return $this->cliente->findOrFail($cliente);
    }

    public function store(Request $request)
    {
        $this->cliente->create($request->all());

        //mensagem de criacao...
        return response()
                    ->json(['data' => [
                                'message' => 'cliente foi criado com sucesso!']
                           ]);
    }

    public function update(Request $request, $cliente)
    {
         $cliente = $this->cliente->find($cliente);
         $cliente->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'cliente foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($cliente)
    {
        $cliente = $this->cliente->find($cliente);

        $cliente->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'cliente foi removido com sucesso!'
                ]
            ]);
    }
}