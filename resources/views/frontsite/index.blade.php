@extends('frontsite.layout.master')

@section('content')
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Education</span>
                                <h3>For the Creatives</h3>
                                <p>You can learn anything</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Free</span>
                                <h3>Premium Courses</h3>
                                <p>You only have to know one thing</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Education</span>
                                <h3>For the Creatives</h3>
                                <p>You can learn anything.</p>

                            </div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <!-- //banner -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Sign In</h3>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="username" placeholder="user name" required="">
                                <input type="password" name="password" placeholder="Password" required="">
                                <div class="tp">
                                    <input type="submit" value="Sign In" name="signin">
                                </div>
                            </form>
                        </div>
                        <div class="login-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- //Modal1 -->
    <!-- Modal2 -->
    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
            }
        }
    </script>

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <span id='message'></span>
                        <div class="login-form">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <input type="text" name="userName" placeholder="Username" required="">
                                <input type="text" name="Address" placeholder="Address" required="">
                                <input type="password" name="password" placeholder="Password" required="">
                                <input type="file" name="image" required="">
                                <input type="text" name="phoneNumber" placeholder="phone Number" required="">
                                <input type="email" name="email" placeholder="Email" required="">

                                <input type="submit" value="Sign Up" name="signup">
                            </form>
                        </div>
                        <p><a href="#"> By clicking register, I agree to your terms</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal2 -->

    <!-- bootstrap-pop-up -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <h5>Mastering</h5>
                        <img src="{{asset('images/2.jpg')}}" alt=" " class="img-responsive"/>
                        <p>Ut enim ad minima veniam, quis nostrum
                            exercitationem ullam corporis suscipit laboriosam,
                            nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit
                            e.
                            <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur.</i></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up -->

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">

            <div class="team-w3ls-row">
                <h3 class="w3l_header w3_agileits_header">new <span>categories</span></h3>
                <div class="agileits_banner_bottom_grids">
                    @foreach($last_categories as $category)
                        <a href='{{route('catbooks' , $category->id)}}'>

                            <div class="col-md-3 col-sm-6 team-grids">
                                <img  src="{{asset('category_image/'.$category->imageName)}}" style='border-radius: 7px ;height: 311px;'/>
                                <div class="img-caption w3-agileits">
                                    <div class="img-agileinfo-text">
                                        <h4>{{$category->title}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- //banner-bottom -->

    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header two">Our <span>Benefits</span></h3>
            <div class="agile_inner_w3ls-grids two">
                <div class="col-md-3 service-box">
                    <figure class="icon">
                        <span>1</span>
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </figure>
                    <h5>Experienced Faculty</h5>
                    <p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
                </div>
                <div class="col-md-3 service-box">

                    <figure class="icon">
                        <span>2</span>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </figure>
                    <h5>Online Courses</h5>
                    <p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
                </div>
                <div class="col-md-3 service-box">
                    <figure class="icon">
                        <span>3</span>
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </figure>
                    <h5>Central Library</h5>
                    <p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
                </div>
                <div class="col-md-3 service-box">
                    <figure class="icon">
                        <span>4</span>
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    </figure>
                    <h5>Creative Thinking</h5>
                    <p>Lorem ipsum dolor sit amet.doloremque laudantium elerisque.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- stats -->
    <div class="stats" id="stats">
        <div class="container">
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <p class="counter">{{$users->count()}}</p>
                    <h3>users</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <p class="counter">{{$books->count()}}</p>
                    <h3>books</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                    <i class="fa fa-folder" aria-hidden="true"></i>
                    <p class="counter">{{$categories->count()}}</p>
                    <h3>categories</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p class="counter">{{$authors->count()}}</p>
                    <h3>witters</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //stats -->

    <div class="container">
        <h3 class="w3l_header w3_agileits_header">new <span>books</span></h3>
        <div class="agileits_banner_bottom_grids">
            @foreach($last_books as $book)
                <div class="col-md-3 agileits_banner_bottom_grid">
                <a href='{{route('bookinfo',$book->id)}}'>
                    <div class="hovereffect w3ls_banner_bottom_grid">
                    <img src="{{asset('book_image/'.$book->imageName)}}" class="img-responsive" style='border-radius: 7px ;width: 100% ; height: 100%'/>

                    <div class="overlay">
                        <h4>{{$book->title}}</h4>
                        <p>learn more</p>
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
    home page
@endsection
