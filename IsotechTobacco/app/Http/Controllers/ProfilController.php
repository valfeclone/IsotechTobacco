<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function createProfil(Request $req)
    {
        $profil = $req->only('logo', 'deskripsi', 'kontak', 'alamat', 'hari_buka', 'jam_buka', 'jam_tutup', 
        'facebook', 'twitter', 'instagram');

        $newProfil = Profil::create([
            'deskripsi' => $profil['deskripsi'],
            'kontak' => $profil['kontak'],
            'alamat' => $profil['alamat'],
            'hari_buka' => $profil['hari_buka'],
            'jam_buka' => $profil['jam_buka'],
            'jam_tutup' => $profil['jam_tutup'],
            'facebook' => $profil['facebook'],
            'twitter' => $profil['twitter'],
            'instagram' => $profil['instagram'],
        ]);
        $newProfil->save();

        if($profil['logo']){
            $file = $req->file('logo');
            $path = storage_path('app/public/profils');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $newProfil->logo_path = str_replace(' ', '', $file->getClientOriginalName());
            $newProfil->save();
        }
        return redirect('admin/profil');
    }

    public function viewProfil(Request $req)
    {
        $select = Profil::all()->first();
        return view ('admin/profil')->with('items',$select);
    }

    public function updateProfil(Request $req)
    {   
        $profil = profil::all()->first();
        if($profil){
            $profil['deskripsi'] = $req['deskripsi'];
            $profil['kontak'] = $req['kontak'];
            $profil['alamat'] = $req['alamat'];
            $profil['hari_buka'] = $req['hari_buka'];
            $profil['jam_buka'] = $req['jam_buka'];
            $profil['jam_tutup'] = $req['jam_tutup'];
            $profil['facebook'] = $req['facebook'];
            $profil['twitter'] = $req['twitter'];
            $profil['instagram'] = $req['instagram'];
        }
        $profil->save();

        if($req['logo']){
            $file = $req->file('logo');
            $path = storage_path('app/public/profils');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $profil->logo_path = str_replace(' ', '', $file->getClientOriginalName());
            $profil->save();
        }
        return redirect('admin/profil');
    }
}
