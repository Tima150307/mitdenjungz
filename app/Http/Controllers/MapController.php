<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class MapController extends Controller
{
    public function index()
    {
        // OpenStreetMap als Test
        $mapUrl = 'http://88.211.211.182:8100';

        return view('map', ['url' => $mapUrl]);
    }
}
