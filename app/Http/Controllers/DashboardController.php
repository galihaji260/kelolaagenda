<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\PenilaianKegiatan;
use App\Models\PersonalData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    private $breadcrumb;

    public function __construct()
    {
        $this->breadcrumb = 'Dashboard';
    }
    //
    public function index()
    {
        $result = Agenda::select(DB::raw('YEAR(tanggal) as year'))->distinct()->get();
        $pengisis = PersonalData::distinct()->get();

        $pengisir =  $pengisis->pluck('id');
        $now = Carbon::now();
        $years = $result->pluck('year');
        foreach ($years as $year) {
            $eval['berjalan'] = Agenda::whereYear('tanggal', '=', $year)->where('status_id', '1')
                ->count();
            $eval['terlaksana'] = Agenda::whereYear('tanggal', '=', $year)->where('status_id', '2')
                ->count();
            $eval['batal'] = Agenda::whereYear('tanggal', '=', $year)->where('status_id', '3')
                ->count();
            $eval['total'] = Agenda::whereYear('tanggal', '=', $year)
                ->count();

            $evals[] = [strval($year), $eval['berjalan'], $eval['terlaksana'], $eval['batal'], $eval['total']];
        }
        $data['agenda'] = json_encode($evals);

        foreach ($pengisir as $spengisi) {
            $top['kontributor'] = Agenda::whereYear('tanggal', date('Y', strtotime('-1 year')))->where('pengisi_id', $spengisi)->where('status_id', '2')->count();
            $top['name'] = PersonalData::select('nama')->where('id', $spengisi)->first();
            
            $top1['kontributor'] = Agenda::whereYear('tanggal', date('Y'))->where('pengisi_id', $spengisi)->where('status_id', '2')->count();
            $top1['name'] = PersonalData::select('nama')->where('id', $spengisi)->first();

            $kontributors[] =  [$top['name']->nama, $top['kontributor']];
            $kontributors1[] =  [$top1['name']->nama, $top1['kontributor']];
        }
        $data['kontributor'] = json_encode($kontributors);
        $data['kontributor1'] = json_encode($kontributors1);


        $breadcrumb = $this->breadcrumb;
        return view('dashboard.index', compact('data', 'breadcrumb'));
    }
}