@include('partials._head')

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=293177404041236";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    @include('partials._header')

    @include('partials._messages')

    @include('partials._banner')

    @include('partials._bannerlabel')

    @include('partials._ukrasi')

    @include('partials._produkti')

    @include('partials._team')
    
    @include('partials._label2')

    @include('partials._contact')
    
    @include('partials._footer')
    
    @include('partials._signnscript')
    
</body>
</html>