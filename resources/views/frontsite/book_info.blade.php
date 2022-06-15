@extends('frontsite.layout.master')

@section('content')

    <div class="colorlib-shop">
        <div class="container">
            @include('admin.layout.masseges')
            <div class="row row-pb-lg">
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-detail-wrap">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="product-entry">
                                    <div class="product-img">
                                        <img src="{{asset('book_image/'.$book->imageName)}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">


                                <div class="desc">

                                    <p class="book_info_text price title_book">Title: {{$book->title}}</p>

                                    <p class="price"> From Category: <span
                                            class="book_info_text">{{$book->category->title??'no cat'}}</span></p>
                                    <p class="price">Written By: <span
                                            class="book_info_text">{{$book->author->name??'no author'}}</span></p>
                                    <p class="price">Price: <span class="book_info_text">{{$book->price}}</span></p>

                                    <p class="price">Publisher: <span class="book_info_text">{{$book->publisher}}</span>
                                    </p>

                                    <p class="price">Edition: <span class="book_info_text">{{$book->edition}}</span></p>

                                    <p class="price">Language:<span class="book_info_text"> {{$book->language}}</span>
                                    </p>

                                    <p class="price">Page_number: <span
                                            class="book_info_text">{{$book->page_number}}</span></p>

                                    <p class="price">Available: <span class="book_info_text">{{$book->available}}</span>
                                    </p>
                                    <p class="book_info_text">Description: {{$book->description}}

                                    @if($book->price == 0)
                                        <p><a href="{{asset('book_pdf/'.$book->bookPDF)}}"
                                              class="btn btn-primary btn-addtocart" target='_blank'><i
                                                    class="icon-shopping-cart"></i>Press To Download Book</a></p>
                                    @else
                                        <p class="price">Book not free we are sorry try another books :(</p>
                                    @endif
                                    {{$book_id = $book->id}}
                                    {{$user_id = \Illuminate\Support\Facades\Auth::id()}}
                                    <form method="post" action="{{route('favorite.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        @auth()
                                        <input type="hidden" value="{{$book_id}}" name="book_id">
                                        <input type="hidden" value="{{$user_id}}"
                                               name="user_id">
                                        <input type="submit" value="add to favorite">
                                        @endauth
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('title')
    book information page
@endsection
