<?php

class PagesController extends BaseController {

    public function greet() {
        
        $name = 'Mr. JH';

        return View::make('hello')->with('name', $name);
    }
    
    public function index() {

        return View::make('index');
    }

    public function about() {
        
        // $desc = 'This is a website built with PHP and Laravel.';

        return View::make('about');
        // ->with('desc', $desc);
    }

    public function allBooks() {
    
        $books = DB::table('Books')->get();

        // return $books;

        return View::make('books')->with('books', $books);
    }


}
