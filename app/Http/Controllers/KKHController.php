<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

            $status = 'Not Approved';

            $tanggalKirimKKH = Carbon::parse($data['tanggalKirim'])->format('Y-m-d H:i:s');

            $verifiedData = Verifikasi::where('tanggalKirim', '=', $tanggalKirimKKH)
                ->where('nik', '=', $usersData[$id]['nik'])
                ->first();

            if ($verifiedData) {
                $status = 'Approved';
            }

            if ($userDepartment === 'Admin') {
                if (isset($usersData[$id])) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan'],
                        'status' => $status
                    ];
                }
            } else {
                if (isset($usersData[$id]) && strtolower($usersData[$id]['department']) === strtolower($userDepartment)) {
                    $durasiTidur = $this->calculateSleepDuration($data['jamTidur'], $data['jamBangun']);
                    $combinedData[$id] = [
                        'user' => $usersData[$id],
                        'kkhData' => $data,
                        'totalDurasiTidur' => $durasiTidur['durasi'],
                        'keterangan' => $durasiTidur['keterangan'],
                        'status' => $status
                    ];
                }
            }
        }

        // dd($combinedData);

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
            if ($nik) {
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
                    if (isset($usersData[$id]) && strtolower($usersData[$id]['department']) === strtolower($userDepartment)) {
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
        }

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


}
