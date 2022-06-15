<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderByDesc('created_at')->paginate(5);
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.add', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['title' => 'required|max:15|min:4',
            'description' => 'required',
            'publisher' => 'required',
            'edition' => 'required',
            'language' => 'required',
            'page_number' => 'required',
            'available' => 'required',
            'price' => 'required',
            'imageName' => 'required',
            'bookPDF' => 'required|mimes:pdf',
            'category_id' => 'required',
            'author_id' => 'required'];

        $masseges = [
            'title.required' => 'title must be entered',
            'title.min' => 'title must less than 30',
            'title.max' => 'title must more than 5',
            'description.required' => 'description must be entered',
            'publisher.required' => 'publisher must be entered',
            'edition.required' => 'edition must be entered',
            'language.required' => 'language must be entered',
            'page_number.required' => 'page number must be entered',
            'available.required' => 'available must be entered',
            'price.required' => 'price must be entered',
            'bookPDF.required' => 'PDF must be selected',
            'bookPDF.mimes' => 'book must be pdf',
            'category_id.required' => 'category must be entered',
            'author_id.required' => 'author must be entered',
            'imageName.required' => 'image must be entered',
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
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->publisher = $request->publisher;
        $book->edition = $request->edition;
        $book->language = $request->language;
        $book->page_number = $request->page_number;
        $book->available = $request->available;
        $book->price = $request->price;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;

        $book_image = $request->file('imageName');
        $file_name = $book->title . time() . '.' . $book_image->extension();
        $book_image->move('book_image', $file_name);
        $book->imageName = $file_name;

        $book_pdf = $request->file('bookPDF');
        $file_name2 = $book->title . time() . '.' . $book_pdf->extension();
        $book_pdf->move('book_pdf', $file_name2);
        $book->bookPDF = $file_name2;
        $book->save();

        return redirect()->route('book.index')->with('success', 'Book Added Successfully');


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
    public function edit(Book $book)
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.edit', compact('book', 'categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = ['title' => 'required|max:15|min:4',
            'description' => 'required',
            'publisher' => 'required',
            'edition' => 'required',
            'language' => 'required',
            'page_number' => 'required',
            'available' => 'required',
            'price' => 'required',
            'imageName' => 'required',
            'bookPDF' => 'required|mimes:pdf',
            'category_id' => 'required',
            'author_id' => 'required'];

        $masseges = [
            'title.required' => 'title must be entered',
            'title.min' => 'title must less than 30',
            'title.max' => 'title must more than 5',
            'description.required' => 'description must be entered',
            'publisher.required' => 'publisher must be entered',
            'edition.required' => 'edition must be entered',
            'language.required' => 'language must be entered',
            'page_number.required' => 'page number must be entered',
            'available.required' => 'available must be entered',
            'price.required' => 'price must be entered',
            'bookPDF.required' => 'PDF must be selected',
            'bookPDF.mimes' => 'book must be pdf',
            'category_id.required' => 'category must be entered',
            'author_id.required' => 'author must be entered',
            'imageName.required' => 'image must be entered',
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $book->title = $request->title;
        $book->description = $request->description;
        $book->publisher = $request->publisher;
        $book->edition = $request->edition;
        $book->language = $request->language;
        $book->page_number = $request->page_number;
        $book->available = $request->available;
        $book->price = $request->price;
        $book->category_id = $request->cat_id;
        $book->author_id = $request->auth_id;


        if ($request->file('image_name') != null) {
            $book_image = $request->file('image_name');
            $file_name = $book->title . time() . '.' . $book_image->extension();
            $book_image->move('book_image', $file_name);
            $book->imageName = $file_name;
        }

        if ($request->file('pdf_name') != null) {
            $book_pdf = $request->file('pdf_name');
            $file_name2 = $book->title . time() . '.' . $book_pdf->extension();
            $book_pdf->move('book_pdf', $file_name2);
            $book->bookPDF = $file_name2;
        }

        $book->save();
        return redirect()->route('book.index')->with('success', 'Book Updated Successfully');;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->fav()->delete();
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Book Deleted Successfully');
    }
}
