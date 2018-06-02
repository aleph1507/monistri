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
                  <!----- view cart ---->

                  <form target="paypal" style="display:inline;margin:0;padding:0;" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


                  <!---- end view cart ---->
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

    