<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $serviceMonthCount = ServiceRequest::whereMonth('created_at', date('m'))->count();
        $serviceToday = ServiceRequest::whereMonth('created_at', Carbon::today())->count();
        $services = Service::get()->count();
        $projects = Portfolio::get()->count();
        return view('backend.home.index', compact('serviceMonthCount', 'serviceToday', 'services', 'projects'));
    }
}
