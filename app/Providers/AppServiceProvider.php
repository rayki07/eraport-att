<?php

namespace App\Providers;

use App\Models\Semester;
use App\Models\TahunAjaran;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Models\Mapel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ----- Menampilkan tahun Ajaran -----
        static $infoAkademic =null;
        View::composer('*', function($view) use (&$infoAkademic) {
            if ($infoAkademic === null){
                $tahun = TahunAjaran::where('is_active', true)->first();
                $semester = Semester::where('is_active', true)->first();

                $infoAkademic = sprintf(
                    '%s Semester %s',
                    $tahun->tahun_ajaran_display ?? '-',
                    $semester->nama_semester ?? '-'
                );

            }

            $view->with('tahun_ajaran_global', $infoAkademic);
        });

        // ----- Menampilkan daftar Mata Pelajaran ----
        View::composer('components.sidebar', function($view) {
            $mapel = Mapel::all();

            $view->with('sidebar_mapel', $mapel);
        });
    }
}
