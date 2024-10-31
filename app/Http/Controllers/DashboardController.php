<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class DashboardController extends Controller
{
    //
    public function index(){

        $response = $this->getDataFireBase();
        $data = json_decode($response->getContent(), true);
        $kkhData = $data['KKHData'] ?? [];
        $usersData = $data['Users'] ?? [];

        // Inisialisasi variabel untuk menyimpan hasil
        $totalKurangTidur = 0;
        $totalTidakAdaKeluhan = 0;
        $totalShiftPagi = 0;
        $totalShiftMalam = 0;
        $totalData = 0; // Variabel untuk total data

        // Fungsi untuk menghitung durasi tidur
        function calculateSleepDuration($jamTidur, $jamBangun) {
            $tidur = new DateTime($jamTidur);
            $bangun = new DateTime($jamBangun);

            if ($tidur > $bangun) {
                $bangun->modify('+1 day');
            }

            return $bangun->diff($tidur)->h + ($bangun->diff($tidur)->i / 60);
        }

        function calculateSleepDuration2($jamTidur, $jamBangun) {
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

        // Menghitung kategori
        foreach ($kkhData as $id => $data) {
            if (isset($usersData[$id])) {
                $totalJamTidur = calculateSleepDuration($data['jamTidur'], $data['jamBangun']);

                // Hitung Kurang Tidur
                if ($totalJamTidur < 6) {
                    $totalKurangTidur++;
                }

                // Hitung keluhan
                if ($data['keluhan'] === 'Tidak Ada') {
                    $totalTidakAdaKeluhan++;
                }

                // Hitung shift
                if ($data['shift'] === 'Pagi') {
                    $totalShiftPagi++;
                } elseif ($data['shift'] === 'Malam') {
                    $totalShiftMalam++;
                }

                $totalData++; // Hitung total data
            }
        }



        $result = [
            'totalKurangTidur' => $totalKurangTidur,
            'totalTidakAdaKeluhan' => $totalTidakAdaKeluhan,
            'totalShiftPagi' => $totalShiftPagi,
            'totalShiftMalam' => $totalShiftMalam,
            'totalData' => $totalData, // Tambahkan total data ke hasil
        ];
        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if (isset($usersData[$id])) {
                $durasiTidur = calculateSleepDuration2($data['jamTidur'], $data['jamBangun']);

                // Tambahkan kondisi untuk memeriksa keterangan
                if ($durasiTidur['keterangan'] === 'Kurang Tidur') {
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            }
        }


        // Siapkan data untuk view
        return view('dashboard.index', compact('result', 'combinedData'));

    }
}
