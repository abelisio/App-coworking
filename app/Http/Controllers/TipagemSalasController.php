<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;

class SalasController extends Controller
{
    private $sala;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Sala $sala)
    {
        $this->sala = $sala;
    }

    public function index()
    {
        return $this->sala->paginate(10);
    }

    public function show($sala)
    {
        return $this->sala->findOrFail($sala);
    }

    public function store(Request $request)
    {
        $this->sala->create($request->all());

        //mensagem de criacao...
        return response()
                    ->json(['data' => [
                                'message' => 'sala foi criado com sucesso!']
                           ]);
    }

    public function update(Request $request, $sala)
    {
        $sala = $this->sala->find($sala);
        $sala->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'sala foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($sala)
    {
        $sala = $this->sala->find($sala);

        $sala->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'sala foi removido com sucesso!'
                ]
            ]);
    }
}