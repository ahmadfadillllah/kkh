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

        $totalKurangTidur = 0;
        $totalTidakAdaKeluhan = 0;
        $totalShiftPagi = 0;
        $totalShiftMalam = 0;
        $totalData = 0;

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

            if ($tidur > $bangun) {
                $bangun->modify('+1 day');
            }

            $durasi = $bangun->diff($tidur);

            $totalJamTidur = $durasi->h + ($durasi->i / 60);

            $formattedDurasi = $durasi->h . ' jam ' . $durasi->i . ' menit';

            $keterangan = $totalJamTidur >= 6 ? 'Cukup' : 'Kurang Tidur';

            return [
                'durasi' => $formattedDurasi,
                'keterangan' => $keterangan
            ];
        }

        foreach ($kkhData as $id => $data) {
            if (isset($usersData[$id])) {
                $totalJamTidur = calculateSleepDuration($data['jamTidur'], $data['jamBangun']);

                if ($totalJamTidur < 6) {
                    $totalKurangTidur++;
                }

                if ($data['keluhan'] === 'Tidak Ada') {
                    $totalTidakAdaKeluhan++;
                }

                if ($data['shift'] === 'Pagi') {
                    $totalShiftPagi++;
                } elseif ($data['shift'] === 'Malam') {
                    $totalShiftMalam++;
                }

                $totalData++;
            }
        }



        $result = [
            'totalKurangTidur' => $totalKurangTidur,
            'totalTidakAdaKeluhan' => $totalTidakAdaKeluhan,
            'totalShiftPagi' => $totalShiftPagi,
            'totalShiftMalam' => $totalShiftMalam,
            'totalData' => $totalData,
        ];
        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if (isset($usersData[$id])) {
                $durasiTidur = calculateSleepDuration2($data['jamTidur'], $data['jamBangun']);

                if ($durasiTidur['keterangan'] === 'Kurang Tidur') {
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            }
        }

        return view('dashboard.index', compact('result', 'combinedData'));

    }
}
