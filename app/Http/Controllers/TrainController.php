<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Torian257x\RubWrap\Service\RubixService;

class TrainController extends Controller
{
    public function train(Request $request)
    {
        $apartment_data = [
            ['space_m2' =>  10, 'price' => 100],
            ['space_m2' =>  20, 'price' => 200],
            ['space_m2' =>  30, 'price' => 300],
            ['space_m2' =>  40, 'price' => 400],
            //...
            ['space_m2' => 280, 'price' => 2800],
            ['space_m2' => 290, 'price' => 2900],
            ['space_m2' => 300, 'price' => 3000],
        ];

        $report = RubixService::train($apartment_data, 'price');

        var_export($report);
    }
}