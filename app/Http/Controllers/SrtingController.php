<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SrtingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stringFilter(Request $request)
    {
        return  $request->all();
    }
}
