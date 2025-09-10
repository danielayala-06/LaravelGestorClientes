<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Colegios;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class colegiosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colegios =  DB::table('colegios')
        ->get();
        return view('colegios.index', compact('colegios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colegios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validamos los datos obtenidos por el formulario
        try {
            $colegio = $request->validate([
                'nombre'=> 'required|string|max:42',
                'ubicacion'=> 'required|string|max:42',
                'nivel'=> 'required|string|max:10',
            ]);
        } catch (ValidationException  $e) {
            return response()->json([
                'message' => 'Datos invalidos',
                'errores' => $e->errors(),
            ], 422);
        }
        
        Colegios::create([
            'nombre' => $colegio['nombre'],
            'ubicacion' => $colegio['ubicacion'],
            'nivel' => $colegio['nivel'],
        ]);
        return redirect()->route('colegios.create')->with('suceces', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
