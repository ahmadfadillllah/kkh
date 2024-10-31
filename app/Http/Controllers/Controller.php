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
            ->withDatabaseUri('https://application-63b0a-default-rtdb.firebaseio.com/');

        $this->apiFirebase = $factory->createDatabase();
    }

    public function getDataFireBase()
        {
            $snapshot = $this->apiFirebase->getReference()->getSnapshot();
            $data = $snapshot->getValue();

            return response()->json($data);
        }
}
