<!-- header section strats -->
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item ">
                    <a class="nav-link" href="{{('/home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
                    <a class="nav-link" href="{{('navbar.testimonial')}}">
                        Testimonial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('navbar.contact')}}">Contact Us</a>
                </li>
            </ul>

            <div class="user_option">
              <span>
                <form method="POST" action="{{ route('logout') }}">
                     @csrf
                    <input type="submit" name="logout" value="logout"><i class="fa fa-sign-out mt-2"></i>
                </form>
              </span>
            </div>
        </div>
    </nav>
</header>
<!-- end header section -->
