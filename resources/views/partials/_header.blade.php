<!--HEADER START-->
    <div class="main-navigation navbar-fixed-top">
        <nav class="navbar navbar-default">
            <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" style="margin:0;padding:0;display:inline-block;" href="/">Делфина Накит</a>
            </div>

              <div class="fb-like" style="margin-left:5px; display:inline-block;" data-href="https://www.facebook.com/Delfina-Handmade-Jewelry-509756959065882/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>


            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="/#banner">Почетна</a></li>
                  <li><a href="/#ukrasi">Накит</a></li>
                  <li><a href="/#produkti">Продукти</a></li>
                  <li><a href="/#about">За Нас</a></li>
                  <li><a href="/#contact">Контакт</a></li>
                  @if(Auth::check())
                    <li><a href="/products">Администрирај продукти</a></li>
                    <li><a href="/categories">Администрирај категории</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                  @endif
                  {{-- <li><a href="/login">Најави се</a></li> --}}
                  {{-- <li><a href="/register">Регистрирај се</a></li> --}}
                </ul>
              </div>
            
           {{--  @if(Request::is('login') or Request::is('register') or Request::is('products') or Request::is('categories'))
                <div class="collapse navbar-collapse" id="myNavbar" style="display:inline;">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="/#banner">Почетна</a></li>
                  <li><a href="/#ukrasi">Накит</a></li>
                  <li><a href="/#produkti">Продукти</a></li>
                  <li><a href="/#about">За Нас</a></li>
                  <li><a href="/#contact">Контакт</a></li>
                  @if(Auth::check())
                    <li><a href="/products">Администрирај продукти</a></li>
                    <li><a href="/categories">Администрирај категории</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                  @endif
                </ul>
              </div>
            @else
                <div class="collapse navbar-collapse" id="myNavbar" style="display:inline;">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#banner">Почетна</a></li>
                  <li><a href="#ukrasi">Накит</a></li>
                  <li><a href="#produkti">Продукти</a></li>
                  <li><a href="#about">За Нас</a></li>
                  <li><a href="#contact">Контакт</a></li>
                  @if(Auth::check())
                    <li><a href="/products">Администрирај продукти</a></li>
                    <li><a href="/categories">Администрирај категории</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Одјава</a>
                  @endif
                </ul>
              </div>
            @endif
            --}} 
          </div>
        </nav>
    </div>
    <!--HEADER END-->

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>

    