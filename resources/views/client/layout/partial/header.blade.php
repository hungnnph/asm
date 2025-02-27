<header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="{{route('index')}}">
          <img class="img-fluid" width="100px" src="{{asset('reader/images/logo.png')}}"
            alt="Reader | Hugo Personal Blog Template">
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Trang chủ <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index-full.html">Homepage Full Width</a>
                
                <a class="dropdown-item" href="index-full-left.html">Homepage Full With Left Sidebar</a>
                
                <a class="dropdown-item" href="index-full-right.html">Homepage Full With Right Sidebar</a>
                
                <a class="dropdown-item" href="index-list.html">Homepage List Style</a>
                
                <a class="dropdown-item" href="index-list-left.html">Homepage List With Left Sidebar</a>
                
                <a class="dropdown-item" href="index-list-right.html">Homepage List With Right Sidebar</a>
                
                <a class="dropdown-item" href="index-grid.html">Homepage Grid Style</a>
                
                <a class="dropdown-item" href="index-grid-left.html">Homepage Grid With Left Sidebar</a>
                
                <a class="dropdown-item" href="index-grid-right.html">Homepage Grid With Right Sidebar</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Về chúng tôi <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                
                <a class="dropdown-item" href="about-me.html">About Me</a>
                
                <a class="dropdown-item" href="about-us.html">About Us</a>
                
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Liên hệ</a>
            </li>
  
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Trang <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                
                <a class="dropdown-item" href="author.html">Author</a>
                
                <a class="dropdown-item" href="author-single.html">Author Single</a>
  
                <a class="dropdown-item" href="advertise.html">Advertise</a>
                
                <a class="dropdown-item" href="post-details.html">Post Details</a>
                
                <a class="dropdown-item" href="post-elements.html">Post Elements</a>
                
                <a class="dropdown-item" href="tags.html">Tags</a>
  
                <a class="dropdown-item" href="search-result.html">Search Result</a>
  
                <a class="dropdown-item" href="search-not-found.html">Search Not Found</a>
                
                <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                
                <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>
  
                <a class="dropdown-item" href="404.html">404 Page</a>
                
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Cửa hàng</a>
            </li>
          </ul>
        </div>
  
        <div class="order-2 order-lg-3 d-flex align-items-center">
          <select class="m-2 border-0 bg-transparent" id="select-language">
            <option id="en" value="" selected>En</option>
            <option id="fr" value="">Fr</option>
          </select>
          
          <!-- search -->
          {{-- <form class="search-bar" action="{{route('partial.search')}}" method="Get">
            <input  name="query" type="text" placeholder="Type &amp; Hit Enter...">
          </form> --}}
          <form class="search-bar" action="{{route('search')}}" method="GET">
            <input  name="query" type="text" placeholder="Type &amp; Hit Enter...">
          </form>
          
          <button class="navbar-toggler border-0 order-1" type="submit" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
          </button>
        </div>
  
      </nav>
    </div>
</header>