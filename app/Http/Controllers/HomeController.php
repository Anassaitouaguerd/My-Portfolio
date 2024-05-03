<?php

namespace App\Http\Controllers;

use App\Models\Me;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Me = Me::get();
        $info = $Me[0]->informations;
        $informations = json_decode($info);
        return view("index", compact('informations'));
    }
}