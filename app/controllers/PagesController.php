<?php

class PagesController extends BaseController {

    public function home() {
        
        $name = 'Mr. JH';

        return View::make('hello')->with('name', $name);
    }
    
    public function about() {
        
        $desc = 'This is a website built with PHP and Laravel.';

        return View::make('about')->with('desc', $desc);
    }

}
