<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Situacao;
use App\Models\Participacao;

class UserController extends Controller
{
    public function index(){    

        {
            // Retrieve all users
            $user = User::all();
            
            // Retrieve all Situacao records
            $situacoes = Situacao::all();
            
            // Retrieve all Participacao records withtheir related users and situacao
            $participacoes = Participacao::with('situacao','user')->get();
    
            // Pass the retrieved data to the view
            return view('Site.Index', compact('user','situacoes','participacoes'));
            
    }
    }
}
