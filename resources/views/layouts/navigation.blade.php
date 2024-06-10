@include('shop.head')

<div class="hero_area">

    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span class="font-extrabold text-4xl">
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class=" navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{('/home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('shop.product')}}">
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('navbar.whyus')}}">
                        Why Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('navbar.testimonies')}}">
                        Testimonial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('navbar.contact')}}">Contact Us</a>
                </li>
            </ul>
            <div class="user_option">
                <a href="{{ url('/login') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                Login
              </span>
                </a>

                <a href="{{url('/register')}}">
                    <i class="fa fa-vcard" aria-hidden="true"></i>
                    <span>
                Register
              </span>
                </a>

                <a href="">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
                <form class="form-inline ">
                    <button class="btn nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>



    <section class="slider_section">
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            Welcome To Our <br>
                                            Gift Shop
                                        </h1>
                                        <p>
                                            Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non necessitatibus error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.
                                        </p>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="img-box">
                                        <img style="width:600px" src="images/image3.jpeg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- end slider section -->
</div>
<!-- end hero area -->

