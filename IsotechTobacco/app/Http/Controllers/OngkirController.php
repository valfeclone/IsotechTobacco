<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ShippingFee;
use App\Models\User;
use App\Models\Kodewilayah;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OngkirController;

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

    public static function getShippingFee($req)
    {    
        $user = Auth::user();
        if($req){
            $key = env('TARIFKEY');
            $data = array
            (
                            'weight'=>"1"
                            ,'sendSiteCode'=>'JAKARTA'
                            ,'destAreaCode'=>$req
                            ,'cusName'=>'GONDRONGTOBACCO'
                            ,'productType'=>'EZ'
            );
            $jason=json_encode($data);
            $mmm = base64_encode(md5($jason.$key));

            return Http::asForm([
                'Content-Type' => 'application/x-www-form-urlencoded',
              ])->post("http://test-jk.jet.co.id/jandt_track/inquiry.action", [
                    'data' => $jason,
                    'sign' => $mmm,
            ]);
        }

        else{
            if($user){
                $key = env('TARIFKEY');
                $data = array
                (
                                'weight'=>"1"
                                ,'sendSiteCode'=>'JAKARTA'
                                ,'destAreaCode'=>$user['kota']
                                ,'cusName'=>$user['name']
                                ,'productType'=>'EZ'
                );
                $jason=json_encode($data);
                $mmm = base64_encode(md5($jason.$key));
                $data1 = array
                (
                                 'data'=>$jason
                                ,'sign'=>$mmm
                );
    
                return Http::withHeaders([
                    'Content-Type' => 'application/x-www-form-urlencoded',
                  ])->post("http://test-jk.jet.co.id/jandt_track/inquiry.action", [
                    'data' => $jason,
                    'sign' => $mmm,
                ]);
            }
        }
    }

    public function getAllShippingFee()
    {
        $select = ShippingFee::where();
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

    public function getProvinsi()
    {
        $res = Kodewilayah::select('PROVINSI')->distinct()->get();
        return json_encode($res);
    }

    public function getKota($provinsi)
    {
        $res = Kodewilayah::select('KAB_KOTA')->where('PROVINSI', $provinsi)->distinct()->get();
        return json_encode($res);
    }

    public function getKecamatan($kota)
    {
        $res = Kodewilayah::select('KECAMATAN')->where('KAB_KOTA', $kota)->distince()->get();
        return json_encode($res);
    }

    public function getKelurahan($kecamatan)
    {
        $res = Kodewilayah::select('KELURAHAN_DESA', 'KODE_POS')->where('KECAMATAN', $kecamatan)->distinct()->get();
        return json_encode($res);
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
