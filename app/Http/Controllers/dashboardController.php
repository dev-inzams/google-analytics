<?php

namespace App\Http\Controllers;
use Spatie\Analytics\Period;
use Illuminate\Support\Carbon;
use Spatie\Analytics\Facades\Analytics;

class dashboardController extends Controller {

    public function index() {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        Period::create($startDate, $endDate);

        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $fetchTopCountries = Analytics::fetchTopCountries(Period::create($startDate, $endDate));
        return view('dashboard',[
            'topCountries' => $fetchTopCountries,
        ]);
    }
}
