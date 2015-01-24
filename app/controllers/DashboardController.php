<?php

class DashboardController extends BaseController {

    protected $layout = 'layouts.admin';

    public function getIndex(){
        $this->layout->content = View::make('admin.dashboard');
    }
}
