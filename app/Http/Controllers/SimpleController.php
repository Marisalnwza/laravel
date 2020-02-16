<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index()
    {
        
        return response()->json($this->getName(),201);
  
    } 

    private function getName()
    {
        $name = "Noina";
        $firstName = "Marisa";
        $lastName = "Warncha-em";
        $age = 22;

        return array([
            'name' => $name,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
        ]);
    }
  
}
