<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraans = Kendaraan::latest()->paginate(5);
    
        return view('kendaraans.index',compact('kendaraans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {              
        $request->validate([
            'plat' => 'required',
            'merk' => 'required',
            'tipe' => 'required',                        
        ]);
        
                 
            
        Kendaraan::create($request->all());
        
        return redirect()->route('kendaraans.index')
                        ->with('success','Kendaraan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraans.show',compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraans.edit',compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'plat' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
        ]);
    
        $kendaraan->update($request->all());
    
        return redirect()->route('kendaraans.index')
                        ->with('success','Kendaraan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
    
        return redirect()->route('kendaraans.index')
                        ->with('success','Kendaraan deleted successfully');
    }

    
      
}
