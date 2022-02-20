<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBanner(Request $req)
    {
        $banner = $req->only('gambar_banner', 'deskripsi');
        
        // dd($Banner);

        $newBanner = Banner::create([
            'deskripsi' => $banner['deskripsi'],
        ]);
        $newBanner->save();

        if($banner['gambar_banner']){
            $file = $req->file('gambar_banner');
            $path = storage_path('app/public/banners');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $newBanner->link_gambar = str_replace(' ', '', $file->getClientOriginalName());
            $newBanner->save();
        }
        return redirect('admin/banner');
    }

    public function viewAllBanner()
    {
        $select = Banner::all();
        return view ('admin/banner')->with('items',$select);
    }

    public function updateBanner(Request $req)
    {
        // dd($req);
        $id = $req['bannerID'];
        
        $banner = Banner::find($id);
        if($banner){
            $banner['deskripsi'] = $req['deskripsi'];
        }
        $Banner->save();

        if($req['gambar_banner']){
            $file = $req->file('gambar_banner');
            $path = storage_path('app/public/banners');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $newBanner->link_gambar = str_replace(' ', '', $file->getClientOriginalName());
            $newBanner->save();
        }
        return redirect('admin/banner');
    }

    public function deleteBanner($id)
    {
        $res = Banner::find($id)->delete();
        return redirect('admin/banner');
    }
}
