@extends('frontsite.layout.master')

@section('content')

    <div class="container">
        <h3 class="w3l_header w3_agileits_header">Search result : <span> {{$request->search}}</span></h3>
        <div class="agileits_banner_bottom_grids">
            @if($books->count() >0)
                @foreach($books as $book)

                    <div class="col-md-3 agileits_banner_bottom_grid"  style="margin-bottom: 10px">
                        <a href='{{route('bookinfo',$book->id)}}'>
                            <div class="hovereffect w3ls_banner_bottom_grid">
                                <img src="{{asset('book_image/'.$book->imageName)}}" class="img-responsive"
                                     style='border-radius: 7px ;width: 100%'/>
                                <div class="overlay">
                                    <h4>{{$book->title}}</h4>
                                    <p>learn more</p>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            @else
                {{'there is no result ?! '}}
            @endif


            <div class="clearfix"></div>
        </div>

    </div>

@endsection

@section('title')
   search books page
@endsection
