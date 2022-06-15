<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
//            return redirect()->route('profile' , Auth::user());
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


    public function add_fav(Request $request)
    {
        $book_id = $request->book_id;
        $user_id = $request->user_id;
        $favorite = DB::table('favorites')->where('book_id', $book_id)->Where('user_id', $user_id)->get();
        if (count($favorite) > 0) {
            return redirect()->route('bookinfo', $book_id)->with('error', 'book already favorite');
        }
        $fav = new Favorite();
        $fav->book_id = $book_id;
        $fav->user_id = $user_id;
        $fav->save();
        return redirect()->route('bookinfo', $book_id)->with('success', 'Added To Favorite Successfully');
    }


    public function delete_fav(Request $request)
    {
        Favorite::find($request->fav_id)->delete();
        return redirect()->route('profile')->with('success' , 'book removed from favorite successfully');
    }

    public function user_reset($id)
    {
        return view('frontsite.edite_password', compact('id'));
    }

    public function user_do_reset(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            'password' => 'required|confirmed',
            'old_password' => 'required',
        ];

        $masseges = [
            'old_password.required' => 'password must be entered',
            'password.required' => 'password must be entered',
            'password.confirmed' => 'password must be matched',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('profile' , $user)->with('success', 'Reset Password Admin Successfully');;
        } else {
            return redirect()->back()->withErrors('incorrect old password');
        }

    }

    public function user_change($id)
    {
        $user = User::find($id);
        return view('frontsite.edite_profile', compact('user'));
    }
    public function user_do_change(Request $request , $id)
    {
        $user = User::find($id);
        $rules = ['name' => 'required|max:15|min:3',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'address' => 'required',
        ];

        $masseges = [
            'name.required' => 'name must be entered',
            'name.min' => 'name must more than 3 character',
            'name.max' => 'name must less than 15 character',
            'address.required' => 'address must be entered',
            'phoneNumber.required' => 'phone number must be entered',
            'email.required' => 'email must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->address = $request->address;

        if ($request->file('userImage') != null) {
            $ext = $request->file('userImage')->extension();
//            dd($ext);
            // || $ext != 'jpeg' || $ext != 'jfif' || $ext != 'pjpeg' || $ext != 'pjp' || $ext != 'png' || $ext != 'webp'
            if ($ext != 'jpg') {
                return redirect()->back()->with('error', 'your image must be image type !?');
            }
            $user_image = $request->file('userImage');
            $file_name = $user->phoneNumber . time() . '.' . $user_image->extension();
            $user_image->move('user_image', $file_name);
            $user->userImage = $file_name;
        }

        $user->save();

        return redirect()->route('profile', $user)->with('success', 'your information Updated Successfully');

    }
}
