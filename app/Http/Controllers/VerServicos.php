<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerServicos extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($codigo = null)
    {
        if (!$codigo) {
            echo "Serviço não encontrado";
            return;
        }
    
        $servicos = [
            'php' => 'Detalhes do serviço de PHP',
            'devops' => 'Detalhes do serviço de devops',
            'frontend' => 'Detalhes do serviço de frontend',
        ];
    
        $descricaoServico = $servicos[$codigo];
    
        return view('servicos', [
            'descricao' => $descricaoServico
        ]);
    }
}
