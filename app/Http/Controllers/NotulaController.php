<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulas;

class NotulaController extends Controller
{
    private $breadcrumb;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notulas = Notulas::all();
        $this->breadcrumb = 'Notula';
        $breadcrumb = $this->breadcrumb;
        return view('notula.index', compact('notulas','breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        {   
            $this->breadcrumb = 'Notula > Tambah';
            $breadcrumb = $this->breadcrumb;
            return view('notula.create', compact('breadcrumb'));
         }
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
        $this->validate($request, [
            'judul'     => 'required',
            'peserta'     => 'required',
            'konten'   => 'required'
        ]);

        Notulas::create([
            'personaldata_id' => $request->pencatat,
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'peserta'     => $request->peserta,
            'konten'   => $request->konten
        ]);
        return redirect()->route('notula.index')->with('success', 'Sukses Menambah Data Jenis Agenda');
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
        $notula = Notulas::findOrfail($id);
        $this->breadcrumb = 'Notula > Edit';
        $breadcrumb = $this->breadcrumb;
        return view('notula.edit', compact('notula', 'breadcrumb'));
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
            'judul'     => 'required',
            'peserta'     => 'required',
            'konten'   => 'required'
        ]);
        $notula = Notulas::findOrfail($id);
        $notula->fill($request->post())->save();

        return redirect()->route('notula.index')->with('success', 'Jenis Agenda Berhasil Diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notula = Notulas::findOrfail($id);
        $notula->delete();
        return redirect()->route('notula.index')->with('success', 'Jenis Agenda Berhasil Dihapus');
    }
}
