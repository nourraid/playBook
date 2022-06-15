<!-- banner -->
<div class="main_section_agile">
    <div class="w3_agile_banner_top">
        <div class="agile_phone_mail">
            <ul class="agile_forms">
                <li><a class="active" href="{{route('user_logout')}}"></i>Log Out</a></li>
                <li><a class="active" href="{{route('profile')}}"></i><span
                            class="fa fa-user"></span>welcome {{\Illuminate\Support\Facades\Auth::User()->name }} </a>
                </li>
            </ul>
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+(970) 592 212 481</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:education@w3layouts.com">nrayd633@gmail.com</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="agileits_w3layouts_banner_nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" width="100"
                                                                          height="50"/></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="{{route('home')}}"
                                                                      class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="{{route('mail')}}" class="menu__link">Mail Us</a></li>
                        <li class="menu__item"><a href="{{route('categories')}}" class="menu__link">Categories</a></li>

                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Authors <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown"
                                style="width: 200px; height: 200px; overflow: auto">
                                @foreach(\App\Models\Author::all() as $author)
                                    <li><a href="{{route('authorbooks' , $author->id)}}">{{$author->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="menu__item"><a href="{{route('books')}}" class="menu__link">Books</a></li>
                    </ul>
                    <div class="w3_agileits_search">
                        <form action="{{route('search')}}" method="post">
                            @csrf
                            <input type="search" name="search" placeholder="Search here..." required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- banner -->
