<?php

namespace App\Service;

class DashboardService {
    public function index(){
        return view('admin.dashboard.index');
    }
}