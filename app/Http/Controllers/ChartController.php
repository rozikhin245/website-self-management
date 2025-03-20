<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function getChartData()
    {
        // Contoh data dari database (bisa diganti dengan model)
        $data = [
            'categories' => ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
            'clicks' => [6500, 6418, 6456, 6526, 6356, 6456],
            'cpc' => [6456, 6356, 6526, 6332, 6418, 6500]
        ];

        return response()->json($data);
    }
}

