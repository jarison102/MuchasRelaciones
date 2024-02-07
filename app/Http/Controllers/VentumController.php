<?php

namespace App\Http\Controllers;

use App\Models\Ventum;
use Illuminate\Http\Request;

/**
 * Class VentumController
 * @package App\Http\Controllers
 */
class VentumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venta = Ventum::paginate();

        return view('ventum.index', compact('venta'))
            ->with('i', (request()->input('page', 1) - 1) * $venta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventum = new Ventum();
        return view('ventum.create', compact('ventum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ventum::$rules);

        $ventum = Ventum::create($request->all());

        return redirect()->route('venta.index')
            ->with('success', 'Ventum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventum = Ventum::find($id);

        return view('ventum.show', compact('ventum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventum = Ventum::find($id);

        return view('ventum.edit', compact('ventum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ventum $ventum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventum $ventum)
    {
        request()->validate(Ventum::$rules);

        $ventum->update($request->all());

        return redirect()->route('venta.index')
            ->with('success', 'Ventum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ventum = Ventum::find($id)->delete();

        return redirect()->route('venta.index')
            ->with('success', 'Ventum deleted successfully');
    }
}
