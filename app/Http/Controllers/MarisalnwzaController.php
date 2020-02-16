<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarisalnwzaController extends Controller
{
    public function index()
    {
        
        return response()->json($this->getName(),201);
  
    } 

    private function getName()
    {
        $id = "07600497";
        $firstName = "Marisa";
        $lastName = "Warncha-em";
        $name = "Noina";
        $year = 3;
        $major = "computer Science";
        $faculty = "Science";

        return array([

            'id' => $id,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'name' => $name,
            'year' => $year,
            'major' => $major,
            'faculty' => $faculty,
        ]);
    }
  
}