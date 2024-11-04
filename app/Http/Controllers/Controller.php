<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Kreait\Firebase\Factory;

abstract class Controller
{
    //

    public function getDataFireBase()
        {
            $client = new Client();
            $kkhData = [];
            $usersData = [];

            // Ambil data dari KKHData
            try {
                $response1 = $client->get('http://36.67.119.214:3003/KKHData');
                $kkhData = json_decode($response1->getBody(), true);
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                return response()->json(['error' => 'KKHData tidak ditemukan.'], 404);
            }

            // Ambil data dari Users
            try {
                $response2 = $client->get('http://36.67.119.214:3004/Users');
                $usersData = json_decode($response2->getBody(), true);
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                return response()->json(['error' => 'Users tidak ditemukan.'], 404);
            }

            return ['KKHData' => $kkhData, 'Users' => $usersData];
        }
}
