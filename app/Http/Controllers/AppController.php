<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class AppController extends Controller
{
    public function index(){
        return view ('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all(),
        ]);
    }
    public function detail(Book $book){
        return view ('detail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }
    
    public function category(Category $category){
        return view ('index', [
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::all(),
        ]);
    }
    
    public function publisher(){
        return view ('publisher', [
            'title' => 'Publisher List',
            'publisher' => Publisher::all(),
            'categories' => Category::all(),
        ]);
    }
    
    public function publisherID(Publisher $id){
        return view ('publisherDetail', [
            'publisher' => $id,
            'books' => $id->books,
            'categories' => Category::all(),
        ]);
    }
    public function contactni(){
        return view ('contact', [
            'categories' => Category::all(),
        ]);
    }
}
