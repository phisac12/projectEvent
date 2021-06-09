<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    

    public function index() {

        $carros[0] = 'Ferrari';

        echo json_encode($carros);
        
      

    }



}
