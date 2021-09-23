<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function authorslist(){
        $authors=author::all();
        return $authors;

    }

    public function bookslist(){
        $books=book::all();
        return $books;

    }

    public function book_show(Book $book){
        
        return $book;
        
    }

    public function authorshow(author $author){
        return $author;

    }
    
    // public function createauthor(Request $request){
    //     return author::create($request->all());
    // }
    
    // public function createproduct(Request $request){
    //     return author::create($request->all());
    // }

    public function index(){
        return view('pages/index');
    }

    public function logout () {
        
        auth()->logout();
        
        return redirect('/');
    }

    public function addproject(){

        return view('pages/add_project');
    }

    public function myplan(){
        return view('pages/my_plan');
    }
    public function report(){
        return view('pages/report');
    }
    public function testerreport(){
        return view('pages/tester_report');
    }
    
}
