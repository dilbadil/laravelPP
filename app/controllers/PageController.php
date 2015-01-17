<?php
class PageController extends BaseController {

    protected $layout = 'layouts.main';

    public function getIndex()
    {
        $this->layout->content = View::make('blog.index');
    }

    public function getAbout(){
        $this->layout->content = View::make('blog.about');
    }

    public function getCategories(){
        $this->layout->content = View::make('blog.categories');
    }
}
