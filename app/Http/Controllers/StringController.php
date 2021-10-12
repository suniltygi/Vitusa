<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StringService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class StringController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stringFilter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'str1' => 'required|string',
            'str2' => 'required|string',
        ]);

        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();;
            return response()->json($responseArr, Response::HTTP_BAD_REQUEST);
        }
        $service = new StringService;

        $data = $service->StringCompare($request);

        return response()->json($data, Response::HTTP_OK); 
    }
}
