<?php

namespace App\Http\Controllers;

use App\Models\Me;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index()
    {
        $Me = Me::get();
        $info = $Me[0]->informations;
        $informations = json_decode($info);
        return view("index", compact('informations'));
    }
    public function generate_pdf()
    {
        $filePath = str_replace('\\', '/', public_path('pdf/Ait-Ouaguerd-Anass.pdf'));
        return Response::download($filePath, 'Ait-Ouaguerd-Anass.pdf');
    }
}