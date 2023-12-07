<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidan;

class BidanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bidans.index', [
            'bidan' => Bidan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bidans.create', [
            'bidan' => Bidan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_bidan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'spesialis' => 'required|max:255',
            'jd_praktik' => 'required|max:255'
        ]);
        Bidan::create($validatedData);

        return redirect('/dashboard/bidans')->with('success', 'Bidan Successfully Added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidan $bidan)
    {
        return view('dashboard.bidans.edit', [
            'Bidan' => $bidan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidan $bidan)
    {
        $rules = [
            'nama_bidan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'spesialis' => 'required|max:255',
            'jd_praktik' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Bidan::where('id', $bidan->id)->update($validatedData);

        return redirect('/dashboard/bidans')->with('success', 'bidan Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidan $bidan)
    {
        Bidan::destroy($bidan->id);

        return redirect('/dashboard/bidans')->with('success', 'bidan has been deleted!');
    }
}
