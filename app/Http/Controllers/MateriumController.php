<?php

namespace App\Http\Controllers;

use App\Models\Materium;
use Illuminate\Http\Request;

/**
 * Class MateriumController
 * @package App\Http\Controllers
 */
class MateriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = Materium::paginate();

        return view('materium.index', compact('materia'))
            ->with('i', (request()->input('page', 1) - 1) * $materia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materium = new Materium();
        return view('materium.create', compact('materium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materium::$rules);

        $materium = Materium::create($request->all());

        return redirect()->route('materia.index')
            ->with('success', 'Materium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materium = Materium::find($id);

        return view('materium.show', compact('materium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materium = Materium::find($id);

        return view('materium.edit', compact('materium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materium $materium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materium $materium)
    {
        request()->validate(Materium::$rules);

        $materium->update($request->all());

        return redirect()->route('materia.index')
            ->with('success', 'Materium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materium = Materium::find($id)->delete();

        return redirect()->route('materia.index')
            ->with('success', 'Materium deleted successfully');
    }
}
