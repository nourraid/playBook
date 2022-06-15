<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function showhome()
    {
        $last_books = DB::table('books')->orderByDesc('created_at')->limit(4)->get();
        $last_categories = DB::table('categories')->orderByDesc('created_at')->limit(4)->get();

        $categories = Category::all();
        $users = User::all();
        $books = Book::all();
        $authors = Author::all();
        return view('frontsite.index', compact('categories', 'users', 'books', 'authors', 'last_books', 'last_categories'));
    }

    public function showbooks()
    {
        $books = Book::all();
        return view('frontsite.books', compact('books'));
    }

    public function showcategories()
    {
        $categories = Category::all();
        return view('frontsite.categories', compact('categories'));
    }

    public function showcatbooks($id)
    {

        $cat = Category::find($id);
        $books = $cat->books;
        return view('frontsite.books', compact('books', 'cat'));
    }

    public function showbookinfo($id)
    {
        $book = Book::find($id);
        return view('frontsite.book_info', compact('book'));
    }

    public function showauthorbook($id)
    {
        $author = Author::find($id);
        $books = $author->books;

        return view('frontsite.book_author', compact('author', 'books'));
    }

    public function mail()
    {
        return view('frontsite.mail');
    }

    public function search(Request $request)
    {
        $books = DB::table('books')->where('title', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->get();
        return view('frontsite.book_search', compact('request', 'books'));
    }

    public function user_authenticate(Request $request)
    {
        $login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::guard('web')->attempt($login_data)) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'invalid username or password');
    }

    public function user_logout()
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
            return view('frontsite.before_login');

        }
    }

    public function profile(){
        $id = Auth::id() ;
       $user =  User::find($id);
       $favorites = $user->fav;
    return view('frontsite.profile',compact('user' , 'favorites'));
    }
}
