<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\PersonalData;
use Illuminate\Http\Request;
use App\Lib\PasaranHelper;
use App\Models\Agenda;
use App\Models\PengisiYasinan;

class RancanganRutinController extends Controller
{
    private $breadcrumb;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->breadcrumb = 'Rancangan Rutin';
        $breadcrumb = $this->breadcrumb;

        $divisi = Divisi::pluck('nama', 'id')->prepend('Pilih Divisi', '');
        $pic = PersonalData::where('tipe', 'internal')->pluck('nama', 'id')->prepend('Pilih PIC', '');
        $personalData = PersonalData::pluck('nama', 'id')->prepend('Pilih Pengisi', '');
        return view('rancangan.rutin.index', compact(['divisi', 'pic', 'personalData','breadcrumb']));
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

    public function yasinan(Request $request)
    {
        //
        $req = $request->input();
        if (isset($req['submit']) && $req['submit'] == 'Generate') {
            $pasaran = new PasaranHelper();
            $dates = $pasaran->getAllPasaranInYear($req['tahun'], $req['hari']);
            $pengisi = PengisiYasinan::select(['pasaran', 'personaldata_id'])->get()->toArray();
            $personalData = PersonalData::pluck('nama', 'id');

            $this->breadcrumb = 'Rancangan > Yasinan';
            $breadcrumb = $this->breadcrumb;
           

            return view('rancangan.rutin.yasinan', compact(['dates', 'req', 'pengisi', 'personalData'], 'breadcrumb'));
        }

        

        return view('rancanganrutin.index');
    }

    public function yasinanstore(Request $request)
    {
        // $request->validate([
        //     'divisi' => 'required',
        //     'penanggung_jawab' => 'required'
        // ]);
        $req = $request->input();
        for ($i = 0; $i < count($req['tanggal']); $i++) {
            Agenda::create([
                'nama' => $req['kegiatan'][$i],
                'tanggal' => $req['tanggal'][$i],
                'kegiatan' => $req['kegiatan'][$i],
                'pic_id' => $req['penanggungjawab'][$i],
                'pengisi_id' => $req['pengisi'][$i],
                'jenis_id' => '1',
                'status_id' => '1',
                'divisi_id' => $req['divisi'][$i],
                'waktu_mulai' => $req['waktu_mulai'][$i],
                'waktu_selesai' => $req['waktu_selesai'][$i],
                'tempat'  => $req['lokasi'][$i],
                'anggaran' => '0',
                'realisasi_anggaran' =>'0',
                'deskripsi_kegiatan' => 'kegiatan rutin yasinan',
            ]);
        }
        return redirect()->route('rancanganrutin.index');
    }

    public function lainnya(Request $request)
    {
        //
        $req = $request->input();
        if (isset($req['submit']) && $req['submit'] == 'Generate') {
            $pasaran = new PasaranHelper();
            $dates = $pasaran->getAllPasaranInYear($req['tahun'], $req['hari'], $req['pasar']);
            $pengisi = PersonalData::pluck('nama', 'id');
            $personalData = PersonalData::pluck('nama', 'id');

            $this->breadcrumb = 'Rancangan > lainnya';
            $breadcrumb = $this->breadcrumb;

            return view('rancangan.rutin.lainnya', compact(['dates', 'req', 'personalData'], 'breadcrumb'));
        }
        return view('rancanganrutin.index');
    }

    public function lainnyastore(Request $request)
    {
        //
        $req = $request->input();
        for ($i = 0; $i < count($req['tanggal']); $i++) {
            Agenda::create([
                'nama' => $req['kegiatan'][$i],
                'tanggal' => $req['tanggal'][$i],
                'kegiatan' => $req['kegiatan'][$i],
                'pic_id' => $req['penanggungjawab'][$i],
                'pengisi_id' => $req['pengisi'][$i],
                'jenis_id' => '1',
                'status_id' => '1',
                'divisi_id' => $req['divisi'][$i],
                'waktu_mulai' => $req['waktu_mulai'][$i],
                'waktu_selesai' => $req['waktu_selesai'][$i],
                'tempat'  => $req['lokasi'][$i],
                'anggaran' => '0',
                'realisasi_anggaran' => '0',
                'deskripsi_kegiatan' => '',
            ]);
        }
        return redirect()->route('agenda.index');
    }

    public function getPengisi($id)
    {
        $pengisi = PengisiYasinan::join('personal_data', 'personal_data.id', 'pengisi_yasinans.personaldata_id')->where('pengisi_yasinans.pasaran', $id)->pluck('personal_data.nama', 'personal_data.id');

        return response()->json($pengisi);
    }
}
