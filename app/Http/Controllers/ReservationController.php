<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Reservation::with(['apartment', 'client'])->get();
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
        // Verificar si ya existe una reserva en las mismas fechas para el mismo apartamento
        $existingReservation = Reservation::where('id_apartment', $request->id_apartment)
        ->where(function ($query) use ($request) {
            $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                ->orWhere(function ($query) use ($request) {
                    $query->where('start_date', '<=', $request->start_date)
                        ->where('end_date', '>=', $request->end_date);
            });
        })->exists();
        if ($existingReservation) {
            return response()->json(['message' => 'La propiedad ya está reservada en las fechas seleccionadas.'], 400);
        }
        // Crear la nueva reserva
        try {
            $data = Reservation::create($request->all());
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
            $data = Reservation::whereId($id)->with(['apartment', 'client'])->get();
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
            $data = Reservation::whereId($id)->update($request->all());
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
            $employee = Reservation::find($id);
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
