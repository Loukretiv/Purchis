<?php

class DashboardController extends BaseController {

  public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('showDashboard'))); // this checks if the user is logged in when they try to access the dashboard
  }

  public function showDashboard() {
    return View::make('dashboard.index')
      ->with('title', 'PURCHIS || CRE Investment Platform');
  }
}
