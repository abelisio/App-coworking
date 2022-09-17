<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;

class PrediosController extends Controller
{
    private $predio;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Predio $predio)
    {
        $this->predio = $predio;
    }

    public function index()
    {
        return $this->predio->paginate(10);
    }

    public function show($predio)
    {
        return $this->predio->findOrFail($predio);
    }

    public function store(Request $request)
    {
        $this->predio->create($request->all());

        //mensagem de criacao...
        return response()
                    ->json(['data' => [
                                'message' => 'predio foi criado com sucesso!']
                           ]);
    }

    public function update(Request $request, $predio)
    {
        $predio = $this->predio->find($predio);
        $predio->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'predio foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($predio)
    {
        $predio = $this->predio->find($predio);

        $predio->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'predio foi removido com sucesso!'
                ]
            ]);
    }
}