<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

abstract class Controller
{
    //
    protected $apiFirebase;

    public function __construct()
    {
        $serviceAccount = storage_path('application-63b0a-firebase-adminsdk-zwnhv-0af0222886.json');

        $factory = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://kkh-sims-default-rtdb.firebaseio.com/');

        $coba = $this->apiFirebase = $factory->createDatabase();
    }

    public function getDataFireBase()
        {
            $snapshot = $this->apiFirebase->getReference()->getSnapshot();
            $data = $snapshot->getValue();
            dd($data);

            return response()->json($data);
        }
}
