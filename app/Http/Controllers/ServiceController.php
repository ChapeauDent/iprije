<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function office365()
    {
        return view('services.office365');
    }

    public function web()
    {
        return view('services.web');
    }

    public function marketing()
    {
        return view('services.marketing');
    }

    public function formationIA()
    {
        return view('services.formation-ia');
    }

    public function formationJeunes()
    {
        return view('services.formation-jeunes');
    }
}
