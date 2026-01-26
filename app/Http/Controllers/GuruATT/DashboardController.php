<?php

namespace App\Http\Controllers\GuruATT;

use App\Http\Controllers\Controller;
use App\Models\NilaiATT;
use App\Models\PengajarKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $guruId = Auth::user()->guru->id;

        $kelas = PengajarKelas::with('kelas')
            ->where('guru_id', $guruId)
            ->get();
        
        $nilaiDraft = NilaiATT::where('guru_id', $guruId)
            ->where('status', 'draft')
            ->count();

        $nilaiTerkunci = NilaiATT::where('guru_id', $guruId)
            ->where('status', 'terkunci')
            ->count();

        return view('guru_att.dashboard', compact(
            'kelas', 'nilaiDraft', 'nilaiTerkunci'
        ));
    }
}
