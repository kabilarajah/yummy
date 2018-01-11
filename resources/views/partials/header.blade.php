<header>

          <nav class="navbar navbar-inverse">
                      <div class="container">
                          <div class="navbar-header">

                              <!-- Collapsed Hamburger -->
                              <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#app-navbar-collapse">
                                  <span class="sr-only">Toggle Navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>

                              <!-- Branding Image -->
                              <a class="navbar-brand" href="{{ url('/') }}">
                                 <strong> Yummy </strong>
                              </a>
                          </div>

                          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                              <!-- Left Side Of Navbar -->
                              <ul class="nav navbar-nav">
                                  &nbsp;

                                  
                              </ul>

                              <!-- Right Side Of Navbar -->
                              <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                                 
                                  <!-- Authentication Links -->
                                     @if (Auth::guest())

                                        <li><a href="{{ url('/shop') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop</a></li>

                                        <li><a href="{{ route('product.shoppingCart') }}">
                                          <i class="fa fa-shopping-cart " aria-hidden="true"></i> 
                                          Cart  <span class="badge">
                                              {{ Session::has('cart') ? Session::get('cart')->totalQty :'0'}}
                                          </span></a>
                                        </li>
                                        <li><a href="{{ route('login') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Login</a></li>
                                  @else

                                      <li><a href="{{ url('/shop') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shop</a></li>
                                        
                                     

                                       <li>
                                          <a href="{{ route('product.shoppingCart') }}">
                                          <i class="fa fa-shopping-cart " aria-hidden="true"></i> 
                                          Cart  <span class="badge">
                                              {{ Session::has('cart') ? Session::get('cart')->totalQty :'0'}}
                                          </span></a>
                                        </li>
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                          </a>

                                          <ul class="dropdown-menu" role="menu">

                                              
                                              <li><a href="/orders">View Orders</a></li>
                                              
                                              <li><a href="#">Another action</a></li>

                                              <li role="separator" class="divider"></li>

                                              <li>
                                                  <a href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                      Logout
                                                  </a>



                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                  </form>
                                              </li>

                                              
                                          </ul>
                                      </li>
                                  @endif
                              </ul>
                          </div>
                      </div>
                  </nav>
</header>