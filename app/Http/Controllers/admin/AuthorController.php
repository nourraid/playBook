<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderByDesc('created_at')->paginate(5);
        return view('admin.authors.index', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.authors.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['name' => 'required|max:15|min:4',
            'BD' => 'required',
            'address' => 'required',
            'email' => 'required|email'];

        $masseges = [
            'name.required' => 'title must be entered',
            'name.min' => 'title must less than 30',
            'name.max' => 'title must more than 5',
            'BD.required' => 'birth date must be entered',
            'address.required' => 'address must be entered',
            'email.required' => 'email must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        /*$request->validate([
            'title' =>'required|max:30|min:5',
            'body' => 'required|string',
            'cat_id' => 'required|integer'
        ]);*/
        $author = new Author();
        $author->name = $request->name;
        $author->BD = $request->BD;
        $author->address = $request->address;
        $author->email = $request->email;

        $author->save();

        return redirect()->route('author.index')->with('success', 'Author Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $rules = ['name' => 'required|max:15|min:4',
            'BD' => 'required',
            'address' => 'required',
            'email' => 'required|email'];

        $masseges = [
            'name.required' => 'title must be entered',
            'name.min' => 'title must less than 30',
            'name.max' => 'title must more than 5',
            'BD.required' => 'birth date must be entered',
            'address.required' => 'address must be entered',
            'email.required' => 'email must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $author->name = $request->name;
        $author->BD = $request->BD;
        $author->address = $request->address;
        $author->email = $request->email;

        $author->save();

        return redirect()->route('author.index')->with('success', 'Author Updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->books()->delete();
        $author->delete();
        return redirect()->route('author.index')->with('success', 'Author Deleted Successfully');

    }
}
