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
              <a class="navbar-brand" href="index.html">Монистри</a>
            </div>
            @if(Request::is('login') or Request::is('register'))
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#banner">Почетна</a></li>
                  <li><a href="/#ukrasi">Украси</a></li>
                  <li><a href="/#produkti">Продукти</a></li>
                  <li><a href="/#about">За Нас</a></li>
                  <li><a href="/#contact">Контакт</a></li>
                  <li><a href="/login">Најави се</a></li>
                  <li><a href="/register">Регистрирај се</a></li>
                </ul>
              </div>
            @else
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#banner">Почетна</a></li>
                  <li><a href="#ukrasi">Украси</a></li>
                  <li><a href="#produkti">Продукти</a></li>
                  <li><a href="#about">За Нас</a></li>
                  <li><a href="#contact">Контакт</a></li>
                  <li><a href="/login">Најави се</a></li>
                  <li><a href="/register">Регистрирај се</a></li>
                </ul>
              </div>
            @endif
            
          </div>
        </nav>
    </div>
    <!--HEADER END-->