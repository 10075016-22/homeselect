<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Apartment::get();
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'An error has occurred', 'error' => $th->getMessage()], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = Apartment::create($request->all());
            return response()->json([
                'message' => 'The record has been successfully created',
                'data' => $data
            ]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'An error has occurred', 'error' => $th->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = Apartment::whereId($id)->get();
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'An error has occurred', 'error' => $th->getMessage()], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = Apartment::whereId($id)->update($request->all());
            return response()->json([
                'message' => 'The record has been successfully updated',
                'data' => $data
            ]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'An error has occurred', 'error' => $th->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $employee = Apartment::find($id);
            if($employee) {
                $employee->delete();
                return response()->json([ 'message' => 'The record has been successfully deleted' ]);
            } else {
                return response()->json([ 'message' => 'The record not exists' ]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'An error has occurred', 'error' => $th->getMessage()], 500);
        }
    }
}
