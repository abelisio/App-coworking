<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipagemSala;

class TipagemSalasController extends Controller
{
    private $tipagemsala;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TipagemSala $tipagemsala)
    {
        $this->tipagemsala = $tipagemsala;
    }

    public function index()
    {
        return $this->tipagemsala->paginate(10);
    }

    public function show($tipagemsala)
    {
        return $this->tipagemsala->findOrFail($tipagemsala);
    }

    public function store(Request $request)
    {
        $this->tipagemsala->create($request->all());

        //mensagem de criacao...
        return response()
                    ->json(['data' => [
                                'message' => 'sala foi criado com sucesso!']
                           ]);
    }

    public function update(Request $request, $tipagemsala)
    {
        $tipagemsala = $this->tipagemsala->find($tipagemsala);
        $tipagemsala->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'sala foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($tipagemsala)
    {
        $tipagemsala = $this->tipagemsala->find($tipagemsala);

        $tipagemsala->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'sala foi removido com sucesso!'
                ]
            ]);
    }
}