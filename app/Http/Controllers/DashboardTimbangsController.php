<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Timbang;
use Illuminate\Http\Request;

class DashboardTimbangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.timbangs.index', [
            'timbangs' => Timbang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.timbangs.create', [
            'anaks' => Anak::all()
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
        $request->validate([
            'anak_id' => 'required',
            'bb_lhr' => 'required|max:255',
            'tb_lhr' => 'required|max:255',
        ]);

        $cek_data = Timbang::Join('anaks', 'anaks.id', 'timbangs.anak_id')->where('anak_id', $request->anak_id)->first();

        if (!$cek_data) {

            $m = $request->tb_lhr * 1 / 100;

            $tb = $m * $m;

            $IMT = $request->bb_lhr / $tb;

            switch ($IMT) {
                case $IMT < 18.50:
                    $status = "Stanting";
                    break;
                case $IMT >= 18.50 && $IMT <= 24.99:
                    $status = "Normal";
                    break;
                case $IMT >= 25.00 && $IMT < 30.00:
                    $status = "Overweight";
                    break;
                case $IMT >= 30.00:
                    $status = "Obesitas";
                    break;
            }

            Timbang::create([
                "anak_id"       => $request->anak_id,
                "bb_lhr"        => $request->bb_lhr,
                "tb_lhr"        => $request->tb_lhr,
                "status_gizi"   => $status,
            ]);

            return redirect('/dashboard/timbang_anak')->with('success', 'Hasil Timbang Successfully Added!');
        }
        return redirect('/dashboard/timbang_anak')->with('success', 'Hasil Timbang Sudah Tersedia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $timbang = Timbang::where('id', $id)->first();
        $anaks = Anak::all();

        return view('dashboard.timbangs.edit', compact('timbang', 'anaks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'anak_id' => 'required',
            'bb_lhr' => 'required|max:255',
            'tb_lhr' => 'required|max:255',
        ]);

        $data = Timbang::where('id', $id)->first();

        $m = $request->tb_lhr * 1 / 100;

        $tb = $m * $m;

        $IMT = $request->bb_lhr / $tb;

        switch ($IMT) {
            case $IMT < 18.50:
                $status = "Stanting";
                break;
            case $IMT >= 18.50 && $IMT <= 24.99:
                $status = "Normal";
                break;
            case $IMT >= 25.00 && $IMT < 30.00:
                $status = "Overweight";
                break;
            case $IMT >= 30.00:
                $status = "Obesitas";
                break;
        }

        $data->update([
            "anak_id"       => $request->anak_id,
            "bb_lhr"        => $request->bb_lhr,
            "tb_lhr"        => $request->tb_lhr,
            "status_gizi"   => $status,
        ]);

        return redirect('/dashboard/timbang_anak')->with('success', 'Hasil Timbang Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Timbang::findOrFail($id);

        $data->delete();

        return redirect('/dashboard/timbang_anak')->with('success', 'Hasil Timbang has been deleted!');
    }
}
