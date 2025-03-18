<?php

namespace App\Http\Controllers;

use App\Events\WorkerAdd;
use App\Models\User;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $work = work::orderBy('id', 'desc')->first();

        return view("home")
        ->with("users", $user)
        ->with("works", $work);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "username"=>'required',
        ]);

        $data = [
            "username" => $request -> username,
            "status" => "Pending",
        ];

        $dataTeratas = work::orderBy('id', 'desc')->first();
        $maxData = $dataTeratas->slot;

        $existData = User::all()->count();

        $error = [(object)[
            "error"=>"Slot hanya " . $maxData,
        ]];

        if($validator->fails()){
            return redirect()->route("home");
        }else{
            if($existData == $maxData){
                $user = User::all();
                $work = work::orderBy('id', 'desc')->first();

                return view("home")
                ->with("users", $user)
                ->with("works", $work)
                ->with("errors", $error);
            } else{
                User::create($data);
                return redirect()->route("home");
            }
        }
    }


    public function userRead(){
        $user = User::all();
        return view("userRead", ["users" => $user]);
    }

    public function userReadAdm(){
        $user = User::all();
        return view("userReadAdm", ["users" => $user]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
