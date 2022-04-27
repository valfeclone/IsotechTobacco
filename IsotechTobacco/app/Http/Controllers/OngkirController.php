<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingFee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OngkirController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function createShippingFee(Request $req)
    {

        $newShipfee = ShippingFee::create([
            'tujuan' => $req['tujuan'],
            'harga' => $req['harga'],
        ]);
        $newShipfee->save();

        return redirect()->back();
    }

    public function getShippingFee(Request $req)
    {
        if($req){
            $tarif = ShippingFee::where('tujuan', $req['tujuan'])->get();
        }
        $user = Auth::user();
        if($user){
            $tarif2 = ShippingFee::where('tujuan', $user['kota'])->get();
        }

        return $tarif; #ini harusnya di view mana ya tarifnya?
    }

    public function getAllShippingFee()
    {
        $select = ShippingFee::all();
        // dd($select);
        return view ('adminnew/shippingfee-lists')->with('items',$select); #view shipping fee
    }

    public function getSpecShippingFee($id)
    {
        $select = ShippingFee::findOrFail($id);
        // dd($select);
        return view ('adminnew/edit-shippingfee')->with('items',$select); #view shipping fee
    }

    public function updateShippingFee(Request $req)
    {
        $id = $req['shipfeeID'];
        $shipFee = ShippingFee::find($id);
        
        if($shipFee){
            $shipFee['tujuan'] = $req['tujuan'];
            $shipFee['harga'] = $req['harga'];
        }
        $shipFee->save();
        return redirect()->back(); 

    }

    public function deleteShippingFee($id)
    {
        $res = ShippingFee::find($id);
        $res->delete();
        return redirect('admin/shippingfee'); 
    }

    public function saveExcel(Request $req){
        if($req['excel']){
            $file = $req->file('excel');
            $path = storage_path('app/public/file');
            $file->move($path, str_replace(' ', '', 'shipfee.csv'));
        }
        OngkirController::importCsv();
        return redirect('/admin/shippingfee'); #redirect kemana nih?    
    }

    public function csvToArray($filename = '', $delimiter = ','){
        if (!file_exists($filename) || !is_readable($filename))
        return false;

        // dd($filename);
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;   
    }

    public function importCsv()
    {
        $file = public_path('storage\file\shipfee.csv');
        $shipfeearr = $this->csvToArray($file);
        // dd($shipfeearr);
        for ($i = 0; $i < count($shipfeearr); $i++)
        {
            $tujuan = $shipfeearr[$i]['tujuan'];
            $spec = ShippingFee::where('tujuan', 'like', '%'.$tujuan.'%')->first();
            // dd($spec);
            if($spec!=null){
                $spec['tujuan'] = $req['tujuan'];
                $spec['harga'] = $req['harga'];
                $spec->save();
            }
            else{
                $newShipfee = ShippingFee::create([
                    'tujuan' => $tujuan,
                    'harga' => $shipfeearr[$i]['harga'],
                ]);
                $newShipfee->save();
            }
        } 
    }
}