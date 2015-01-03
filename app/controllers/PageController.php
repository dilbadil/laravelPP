<?php
class PageController extends BaseController {
    
    protected $layout = 'layouts.main';
    
    public function getIndex()
    {
        $this->layout->content = View::make('blog.index');
    }
}