<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BidanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidan_admin = Bidan::all();
        $bidan = Bidan::where('id_auth', Auth::user()->id)->get();
        $cari = Bidan::where('id_auth', Auth::user()->id)->first();

        return view('dashboard.bidans.index', compact('bidan_admin', 'bidan', 'cari'));
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
            'id_auth' => 'required',
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
        $request->validate([
            'nama_bidan' => 'required|max:255',
            'id_auth' => 'required',
            'alamat' => 'required|max:255',
            'spesialis' => 'required|max:255',
            'jd_praktik' => 'required|max:255'
        ]);

        $user = User::where('id', $request->id_auth)->first();

        $user->update([
            'name' => $request->nama_bidan,
        ]);

        $bidan  = Bidan::where('id', $bidan->id)->first();

        $bidan->update([
            'nama_bidan' => $request->nama_bidan,
            'id_auth' => $request->id_auth,
            'alamat' => $request->alamat,
            'spesialis' =>  $request->spesialis,
            'jd_praktik' => $request->jd_praktik,
        ]);

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
