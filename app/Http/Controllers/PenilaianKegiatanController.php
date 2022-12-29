<?php

namespace App\Http\Controllers;

use App\Models\PenilaianKegiatan;
use Illuminate\Http\Request;

class PenilaianKegiatanController extends Controller
{
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

        $agendaId = $id;
        return view('penilaian_kegiatan.edit', compact(['penilaianKegiatan', 'agendaId', 'komentars']));
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
            'catatan_pelaksanaan' => 'required'
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

        //check if image is uploaded
        // if ($request->hasFile('gambar')) {

        //     //upload new image
        //     $gamber = $request->file('gambar');
        //     $image->storeAs('public/data_file', $gambar->hashName());

        //     //delete old image
        //     Storage::delete('public/data_file/'.$komentar->gambar);

        //     //update post with new image
        //     $post->update([
        //         'gambar'     => $gambar->hashName(),
        //         'title'     => $request->title,
        //         'content'   => $request->content
        //     ]);

        // } else {

        //     //update post without image
        //     $post->update([
        //         'title'     => $request->title,
        //         'content'   => $request->content
        //     ]);
        // }

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
