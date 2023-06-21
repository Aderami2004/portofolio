<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function show(){
        return view('profile');
    }
    function add(){
        $data=[
            'action' => url('profile/create'),
            'tombol' => 'Simpan',
            'profile' => (object)[
                'id' => '',
                'nama' => '',
                'username' => '',
                'about' => '',
                'nohp' => '',
                'alamat' => '',
                'foto' => '',
            ]
            ];
            return view('profile', $data);
    }
    function create(Request $req){
        Profile::create ([
            'id' => $req->id,
            'nama' => $req->nama,
            'username' => $req->username,
            'about' => $req->about,
            'nohp' => $req->nohp,
            'alamat' => $req->alamat,
            'foto' => $req->file('foto')->store('foto'),
        ]);
        return redirect('profile');
    }

    function edit(){
        $data['profile']= Profile::first();
        $data['action']= url('profile/update').'/'.$data['profile']->id;
        $data['tombol']= 'update';
        return view('profile',$data);
    }
    function update(Request $req){
        if($req->file('foto')){
            $profile = Profile::where('id',$req->id)->first();
            Storage::delete($profile->foto);
            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::raw('foto');
        }
        Profile::where('id',$req->id)->update([
            'id'=>$req->id,
            'nama'=>$req->nama,
            'username'=>$req->username,
            'about'=>$req->about,
            'nohp'=>$req->nohp,
            'alamat'=>$req->alamat,
            'foto' =>$file
        ]);
        return redirect('profile');
    }
}
