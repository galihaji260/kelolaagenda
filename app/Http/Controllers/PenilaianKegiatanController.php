<?php

namespace App\Http\Controllers;

use App\Models\PenilaianKegiatan;
use Illuminate\Http\Request;

class PenilaianKegiatanController extends Controller
{
    private $breadcrumb;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $penilaianKegiatan = PenilaianKegiatan::where('agenda_id', $id)->where('penilai_id', auth()->id())->first();
        $komentars = PenilaianKegiatan::where('agenda_id', $id)->get();
        $nilai = PenilaianKegiatan::where('agenda_id', $id)->avg('nilai');
        $agendaId = $id;

        $this->breadcrumb = 'Penilaian Kegiatan';
        $breadcrumb = $this->breadcrumb;

        return view('penilaian_kegiatan.edit', compact(['penilaianKegiatan', 'agendaId', 'komentars', 'nilai'], 'breadcrumb'));
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
    //
    $request->validate([
        'nilai' => 'required',
        'catatan_pelaksanaan' => 'required',
        'gambar' => 'nullable|image'
    ]);
    $penilaianKegiatan = PenilaianKegiatan::where('agenda_id', $id)->where('penilai_id', auth()->id())->first();
    $file = $request->file('gambar');
    $filename = date('YmdHis').'_'.$file->getClientOriginalName();
    $tujuanUpload = 'data_file';
    $file->move($tujuanUpload, $filename);

    if (!$penilaianKegiatan) {
        PenilaianKegiatan::create([
            'nilai' => $request->nilai,
            'gambar' => $filename,
            'catatan_pelaksanaan' => $request->catatan_pelaksanaan,
            'agenda_id' => $request->agenda_id,
            'penilai_id' => auth()->id()
        ]);
    } else {
        $penilaianKegiatan->fill([
            'nilai' => $request->nilai,
            'gambar' => $filename,
            'catatan_pelaksanaan' => $request->catatan_pelaksanaan,
            'agenda_id' => $request->agenda_id,
            'penilai_id' => auth()->id()
        ])->save();
    }


        return redirect()->route('agenda.index')->with('success', 'Penilaian Pelaksanaan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
