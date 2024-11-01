<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class KKHController extends Controller
{
    //
    public function index(){

        $response = $this->getDataFireBase();
        $data = json_decode($response->getContent(), true);
        $kkhData = $data['KKHData'] ?? [];
        $usersData = $data['Users'] ?? [];

        // dd($data);

        // Fungsi untuk menghitung durasi tidur
        function calculateSleepDuration($jamTidur, $jamBangun) {
            $tidur = new DateTime($jamTidur);
            $bangun = new DateTime($jamBangun);

            // Jika jam tidur lebih besar dari jam bangun, tambahkan satu hari ke waktu bangun
            if ($tidur > $bangun) {
                $bangun->modify('+1 day');
            }

            $durasi = $bangun->diff($tidur);

            // Menghitung total jam tidur
            $totalJamTidur = $durasi->h + ($durasi->i / 60);

            // Format output menjadi "X jam Y menit"
            $formattedDurasi = $durasi->h . ' jam ' . $durasi->i . ' menit';

            // Keterangan berdasarkan total jam tidur
            $keterangan = $totalJamTidur >= 6 ? 'Cukup' : 'Kurang Tidur';

            return [
                'durasi' => $formattedDurasi,
                'keterangan' => $keterangan
            ];
        }

        // Menggabungkan data dan menghitung total durasi tidur
        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if (isset($usersData[$id])) {
                $durasiTidur = calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                $combinedData[$id] = [
                    'user' => $usersData[$id],
                    'kkhData' => $data,
                    'totalDurasiTidur' => $durasiTidur['durasi'],
                    'keterangan' => $durasiTidur['keterangan']
                ];
            }
        }

        // dd($combinedData);


        return view('kkh.index', compact('combinedData'));
    }

    public function show($nik)
    {
        return redirect()->back()->with('info', 'Maaf fitur dalam pengembangan');
    }
}
