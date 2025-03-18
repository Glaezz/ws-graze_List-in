<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{
    //
    public function statDone(user $user){
        $data = [
            "status"=>"Done",
        ];
        $user->update($data);
        return redirect()->route("admin");
    }
    public function statPaid(user $user){
        $data = [
            "status"=>"Paid",
        ];
        $user->update($data);
        return redirect()->route("admin");
    }
    public function statDelete(User $user){
        $user->delete();
        return redirect()->route("admin");
    }

    public function dataEdit(User $user){
        return view("editForm", ["users" => $user]);
    }
    public function dataUpdate(User $user, Request $request){
        $data = [
            "file" => $request -> file,
            "nomor" => $request -> nomor,
            "jenis" => $request -> jenis,
        ];
        
        $user->update($data);
        return redirect()->route("admin");
    }
}
