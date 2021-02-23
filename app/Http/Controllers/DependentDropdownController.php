<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DependentDropdownController extends Controller
{
    public function store(Request $request)
    {
        $cities = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' . $request->get('id'));
        $data_kota = $cities->json();
        return response()->json($data_kota);
    }
}