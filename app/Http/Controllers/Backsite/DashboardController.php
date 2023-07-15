<?php

namespace App\Http\Controllers\Backsite;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Operational\Dosen;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Operational\Mahasiswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = DB::table('laporan')
        ->select(DB::raw('MIN(id) as id'))
        ->groupBy('created_at')
        ->get();

        $results = [];

        foreach ($laporans as $laporan) {
            $result = DB::table('laporan')
                ->join('kelas', 'laporan.kelas_id', '=', 'kelas.id')
                ->join('dosen', 'laporan.dosen_id', '=', 'dosen.id')
                ->select('laporan.*', 'kelas.name as kelas_name', 'dosen.name as dosen_name')
                ->where('laporan.id', '=', $laporan->id)
                ->first();

            array_push($results, $result);
        }
        $user =  User::all();
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::all();
        return view('pages.dashboard.index', compact('user', 'dosen', 'results', 'mahasiswa'));
    }
}
