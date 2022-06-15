@extends('frontsite.layout.master')

@section('content')

    <div class="container">
        <h3 class="w3l_header w3_agileits_header"><span>all categories</span></h3>
        <div class="agileits_banner_bottom_grids">

            @foreach($categories as $category)
                <div class="col-md-3 col-sm-6 team-grids">
                    <a href='{{route('catbooks' , $category->id)}}'>
                        <img src="{{asset('category_image/'.$category->imageName)}}" height='450'/>
                        <div class="img-caption w3-agileits">
                            <div class="img-agileinfo-text">
                                <h4>{{$category->title}}</h4>
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
    categories page
@endsection
