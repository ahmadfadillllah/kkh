<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class KKHController extends Controller
{
    //

    private function calculateSleepDuration($jamTidur, $jamBangun) {
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

    public function index() {
        $client = new \GuzzleHttp\Client();
        $data = $this->getDataFireBase();

        if (isset($data['error'])) {
            return $data;
        }

        $user = Auth::user();
        $userDepartment = $user->departemen;

        $kkhData = $data['KKHData'] ?? [];
        $usersData = $data['Users'] ?? [];

        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if ($userDepartment === 'Admin') {
                if (isset($usersData[$id])) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            } else {
                if (isset($usersData[$id]) && $usersData[$id]['department'] === $userDepartment) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            }
        }

        return view('kkh.index', compact('combinedData'));
    }

    public function show($nik)
    {
        $client = new \GuzzleHttp\Client();
        $data = $this->getDataFireBase();

        if (isset($data['error'])) {
            return $data;
        }

        $user = Auth::user();
        $userDepartment = $user->departemen;

        $kkhData = $data['KKHData'] ?? [];
        $usersData = $data['Users'] ?? [];

        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if ($userDepartment === 'Admin') {
                if (isset($usersData[$id]) && $usersData[$id]['nik'] === $nik) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            } else {
                if (isset($usersData[$id]) && $usersData[$id]['department'] === $userDepartment && $usersData[$id]['nik'] === $nik) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            }
        }

        usort($combinedData, function($a, $b) {
            return strtotime($b['tanggalKirim']) - strtotime($a['tanggalKirim']);
        });


        return view('kkh.show', compact('combinedData'));
    }

    public function verification(Request $request)
    {
        try {
            foreach ($request->input('selectedData', []) as $data) {
                Verifikasi::create([
                    'tanggalKirim' => $data['tanggalKirim'] === 'Not Found' ? null : $data['tanggalKirim'],
                    'nik' => $data['nik'],
                    'nama' => $data['nama'],
                    'departemen' => $data['departemen'],
                    'jamBangun' => $data['jamBangun'],
                    'jamSampai' => $data['jamSampai'],
                    'totalDurasiTidur' => $data['totalDurasiTidur'],
                    'jamTidur' => $data['jamTidur'],
                    'shift' => $data['shift'],
                    'keluhan' => $data['keluhan'],
                ]);
            }
            return response()->json(['message' => 'Data berhasil disimpan!']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Data gagal disimpan!', 'error' => $th->getMessage()], 500);
        }
    }

    public function download( $shift)
    {

        $client = new \GuzzleHttp\Client();
        $data = $this->getDataFireBase();

        if (isset($data['error'])) {
            return $data;
        }

        $user = Auth::user();
        $userDepartment = $user->departemen;

        $kkhData = $data['KKHData'] ?? [];
        $usersData = $data['Users'] ?? [];

        $combinedData = [];
        foreach ($kkhData as $id => $data) {
            if ($userDepartment === 'Admin') {
                if (isset($usersData[$id])) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            } else {
                if (isset($usersData[$id]) && $usersData[$id]['department'] === $userDepartment) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan']
                    ];
                }
            }
        }

        // $shiftData = [
        //     'Siang' => [],
        //     'Malam' => [],
        // ];

        // // Iterasi melalui semua data untuk mengambil informasi terkait shift dan KKH
        // foreach ($combinedData as $nik => $data) {
        //     // Ambil data user dan KKH
        //     $userData = $data['user'];
        //     $kkhData = $data['kkhData'];

        //     // Membuat struktur data yang akan dimasukkan ke dalam shiftData
        //     $userInfo = [
        //         'nik' => $nik,
        //         'name' => $userData['name'],
        //         'department' => $userData['department'],
        //         'shift' => $kkhData['shift'],
        //         'tanggalKirim' => \Carbon\Carbon::parse($kkhData['tanggalKirim'])->translatedFormat('d F Y H:i'),
        //         'jamTidur' => $kkhData['jamTidur'],
        //         'jamBangun' => $kkhData['jamBangun'],
        //         'keluhan' => $kkhData['keluhan'],
        //         'totalDurasiTidur' => $data['totalDurasiTidur'],
        //         'keterangan' => $data['keterangan'],
        //     ];

        //     // Kelompokkan data berdasarkan shift dan tampung seluruh data pengguna di shift tersebut
        //     if (isset($kkhData['shift']) && array_key_exists($kkhData['shift'], $shiftData)) {
        //         $shiftData[$kkhData['shift']][] = $userInfo;
        //     }
        // }

        // // Menampilkan data yang dikelompokkan berdasarkan shift (untuk debugging)
        // dd($shiftData);

        $pdf = PDF::loadView('kkh.download', array(
            'combinedData' => $combinedData,
        ))->setPaper('a4', 'landscape');
        return $pdf->download('Bundle_KKH.pdf');
    }


}
