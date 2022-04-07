@extends('base')

@section('title', 'Title Thank you)
@section('footer')
  <footer>
  <div class="wrapper"> <a href="index.html" id="footer_logo"><span>Hope</span>Center</a>
    <ul id="icons">
      <li><a href="https://www.facebook.com/" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
      <li><a href="https://twitter.com" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
      <li><a href="https://ru.linkedin.com" class="normaltip"><img src="images/icon3.gif" alt=""></a></li>
    </ul>
  </div>
  <div class="wrapper">
    <nav>
      <ul id="footer_menu">
        <li><a href="index">Home</a></li>
        <li><a href="mission">Our Mission</a></li>
        <li class="active"><a href="news">News &amp; Press</a></li>
        <li><a href="help">How to Help</a></li>
        <li class="end"><a href="donate">Donate</a></li>
      </ul>
    </nav>
    <div class="tel"><span>+7</span> 495 111-11-11</div>
  </div>
  <div id="footer_text">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br>
    Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
</footer>
<!-- / footer -->
@endsection
@section('menu')
 <header>
  <div class="wrapper">
    <h1><a href="index" id="logo">Hope Center</a></h1>
    <nav>
      <ul id="top_nav">
        <li><a href="index"><img src="images/top_icon1.gif" alt=""></a></li>
        <li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
        <li class="end"><a href="donate"><img src="images/top_icon3.gif" alt=""></a></li>
      </ul>
    </nav>
    <nav>
      <ul id="menu">
        <li><a href="index">Home</a></li>
        <li><a href="mission">Our Mission</a></li>
        <li id="menu_active"><a href="news">News &amp; Press</a></li>
        <li><a href="help">How to Help</a></li>
        <li ><a href="donate">Donate</a></li>
      </ul>
    </nav>
  </div>

</header>
@endsection
@section('post')
  <h1>Thank you $name</h1>
@endsection
