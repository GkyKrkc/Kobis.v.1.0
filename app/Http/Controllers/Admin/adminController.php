<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    //
    public function kullanicilar()
    {
        $users=User::paginate(10);
        return view('admin/kullanicilar',compact('users'));
    }

    public function kullanici_duzenle($id)
    {
        $user=User::find($id);
        return view('admin.kullanicilar_edit',compact('user'));
    }

    public function kullanici_guncelle(Request $request, $id)
    {
        // return $request->all();

        /*$this->validate($request,[
            "name"=>"required|max:255",
            "email"=>"required|email|unique:users,email,".$id,
            "pasword"=>!empty($request->password) ? "required|min:6":""
        ]);
        */
        if(!empty($request->password)){
            $input =$request->all();
            $input["password"]=bcrypt($request->password);
            User::find($id)->update($input);
        }else{
            User::find($id)->update([
                "name"=>$request->name,
                "email"=>$request->email,
            ]);
        }
        // Roller ve Yetkiler Bölümü
        DB::table("role_user")->where("user_id",$id)->delete();
        $roller=[];
        foreach ($request->rol as $rol){

            $yeni_rol=["role_id"=>$rol,"user_id"=>$id];
            array_push($roller,$yeni_rol);
        }
        DB::table("role_user")->insert($roller);

        Session::flash('durum',1);
        return back();

    }
}
