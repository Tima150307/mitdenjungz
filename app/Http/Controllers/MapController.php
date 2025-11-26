<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class MapController extends Controller
{
    public function index()
    {
        // OpenStreetMap als Test
        $mapUrl = 'https://www.openstreetmap.org/export/embed.html?layer=mapnik';

        return view('map', ['url' => $mapUrl]);
    }
}
