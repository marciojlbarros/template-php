<?php

namespace app\controllers;

class DashBoardController
{
    public function index()
    {
        view('dashboard_home', ['title' => 'Dashboard - Home']);
    }
}
