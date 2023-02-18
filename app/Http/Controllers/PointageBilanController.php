<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pointage;
use App\Models\User;
use Carbon\Carbon;
class PointageBilanController extends Controller
{
    public function render()
    {
 
          //bilan du pointages
          $pointages = pointage::select('id', 'created_at')
          ->get()
          ->groupBy(function($date) {
              //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
              return Carbon::parse($date->created_at)->format('m'); // grouping by months
          });
          
          $pointagemcount = [];
          $pointageArr = [];
          
          foreach ($pointages as $key => $value) {
              $pointagemcount[(int)$key] = count($value);
          }
          
          for($i = 1; $i <= 12; $i++){
              if(!empty($pointagemcount[$i])){
                  $pointageArr[$i] = $pointagemcount[$i];    
              }else{
                  $pointageArr[$i] = 0;    
              }
          }

          return $pointageArr;
     }
}
