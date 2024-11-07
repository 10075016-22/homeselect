<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Task::with(['incident', 'employee'])->get();
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
            $data = Task::create($request->all());
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
            $data = Task::whereId($id)->with(['incident', 'employee'])->get();
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
        $task = Task::findOrFail($id);

        // Definir las reglas de validación
        $rules = [
            'status' => 'required|in:Unasigned,Asigned,In progress,Done,Not done',
            'observation' => 'nullable|string',
        ];

        // Si el nuevo estado es "Done" o "Not done", observation es obligatorio
        if (in_array($request->status, ['Done', 'Not done'])) {
            $rules['observation'] = 'required|string';
        }

        try {
            // Validar los datos
            $validatedData = $request->validate($rules);
            
            // Actualizar la tarea con los datos validados
            $task->update($validatedData);

            return response()->json([
                'message' => 'The record has been successfully updated',
                'data' => $task
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation errors as JSON
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->errors()
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $employee = Task::find($id);
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
