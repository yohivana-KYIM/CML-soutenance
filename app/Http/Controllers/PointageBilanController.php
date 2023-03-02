<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\pointage;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;
use Illuminate\Support\Facades\DB;

class PointageBilanController extends Controller
{
    public function render()
    {

        // $pointage=pointage::selectRaw('COUNT(*) as count, as bilan, YEAR(created_at) year, MONTH(created_at) month',DB::raw('sum(total_hours) as bilan'))

        // ->groupBy('year', 'month','bilan')
        // ->get();

        $pointages=DB::table('pointages') ->select(


            DB::raw('COUNT(*) as count'),
            DB::raw('YEAR(created_at) year'),
            DB::raw('MONTH(created_at) month'),
            DB::raw('sum(total_hours) as bilan'),
            DB::raw('user_id as users'),
            )->groupBy('year', 'month','users')
            ->get();

        // return $pointage;
        // $hours= Carbon::now()->diffInHours("20:30");

        return $pointages;
     }
}
