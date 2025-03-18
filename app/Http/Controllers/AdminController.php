<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function transit(){
        $user = User::all();
        $work = work::orderBy('id', 'desc')->first();

        if(Auth::check()){
            $nama = Auth::user()->name;
            return view("admin")
                ->with("admin", $nama)
                ->with("users", $user)
                ->with("works", $work);
        }else {
            return redirect(route("login"));
        }
    }

    public function login(){
        return view("login");
    }
    public function logout(){
        Auth::logout();
        return redirect(route("home"));
    }

    public function in(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
        ]);

        $data = [
            "name" => $request -> name,
            "password" => $request -> password,
        ];

        if($validator->fails()){
            return redirect()->route("login");
        } else{
            if(Auth::attempt($data)){
                return redirect()->route("admin");
            } else{
                return redirect()->route("home");
            }
        }
    }

    public function set(Request $request){
        $validator = Validator::make($request->all(), [
            'slot' => "required", 
        ]);

        $data = [
            "slot" => $request -> slot,
            "admin"=>Auth::user()->name,
        ];

        $error = [(object)[
            "error"=>"Gagal menambahkan data.",
        ]];


        if($validator->fails()){
            $nama = Auth::user()->name;
            return view("admin")
                ->with("errors", $error)
                ->with("admin", $nama);
        }else {
            $user = User::all();
            $work = work::all();
            User::destroy($user);
            work::destroy($work);
            work::create($data);
            return redirect()->route('admin');
        }
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
