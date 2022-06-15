<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $fav = FavoriteController::orderByDesc('created_at')->paginate(5);
//        return view('admin.categories.index', compact('categories'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Favorite::find($id)->delete();
        return redirect()->route('profile')->with('success' , 'book removed from favorite successfully');
    }
}
