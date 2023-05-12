<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.dashboards.index');
    }

    public function company1()
    {
        return view('companies.company1.index');
    }

    public function company2()
    {
        return view('companies.company2.index');
    }
}
