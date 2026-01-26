<?php

namespace App\Http\Controllers\WaliKelas;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\KelasSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $guruId = Auth::user()->guru->id;

        $kelas = Kelas::where('walikelas_id', $guruId)->first();

        $jumlahSiswa = $kelas
            ? KelasSiswa::where('kelas_id', $kelas->id)->count()
            : 0;

        return view('walikelas.dashboard', compact(
            'kelas', 'jumlahSiswa'
        ));
    }
}
