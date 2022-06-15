@extends('frontsite.layout.master')

@section('content')

    <div class="container">
        <h3 class="w3l_header w3_agileits_header"> book in <span> {{$cat->title}} </span>category</h3>


        <div class="agileits_banner_bottom_grids">

            @foreach($books as $book)
                <div class="col-md-3 agileits_banner_bottom_grid">
                    <a href='{{route('bookinfo',$book->id)}}'>
                        <div class="hovereffect w3ls_banner_bottom_grid">
                            <img src="{{asset('book_image/'.$book->imageName)}}" class="img-responsive"
                                 style='width: 100% ;     height: 100%;'/>
                            <div class="overlay">
                                <h4>{{$book->title}}</h4>
                                <p>learn mor</p>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

    </div>

@endsection

@section('title')
   category books page
@endsection
