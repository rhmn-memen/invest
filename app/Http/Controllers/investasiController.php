<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class investasiController extends Controller
{
    public function index(Request $request) {
        $data = $request;

        // $total_nominal = $final_nominal= 0;
        $nominal = $data->get('nominal');
$invesv= [];

        for ($i=1;$i<=$data->get('tahun_inves'); $i++){
            if ($data->get('jenis_kelamin') == 1) {
                if($data->get('peroko') == 1) {
                    $total_nominal = round(($nominal *1) / 100);
                    $final_nominal = $total_nominal + $nominal;
                } else{
                    $total_nominal = round(($nominal *2) / 100);
                    $final_nominal = $total_nominal + $nominal;
                }
            } else if ($data->get('jenis_kelamin') == 2) {
                if($data->get('peroko') == 1) {
                    $total_nominal = round(($nominal *2) / 100);
                    $final_nominal = $total_nominal + $nominal;
                }else{
                    $total_nominal = round(($nominal *3) / 100);
                    $final_nominal = $total_nominal + $nominal;
                }
            }

            if ($data->get('usia') < 31) {
                $total_nominal = round(($nominal *1) / 100);
                $final_nominal = $total_nominal + $nominal;
            } else if ($data->get('usia') < 51){
                $total_nominal = round(($nominal *0.5) / 100);
                $final_nominal = $total_nominal + $nominal;
            }
            $items = [
                "awal" => $nominal,
                "bunga" => $total_nominal,
                "akhir" => $final_nominal
            ];
            $nominal = $final_nominal;

            $invesv[$i] = $items;
        }
        return response()->json(['message'=> 'success', 'data' => $invesv], 200);
    }
}
