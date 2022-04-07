@extends('base')

@section('title', 'Title Home')
@section('home')


    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>T</strong>rue<span>Story 1</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img1.jpg" alt=""></figure>
                </div>
                Hope Center is one of free website tem- plates by TemplateMonster.com, opti- mized for 1024X768 res. <a href="help" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>T</strong>rue<span>Story 2</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img2.jpg" alt=""></figure>
                </div>
                This Hope Center Template goes with two packages – with PSD source files and without them.<a href="help" class="button1 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>T</strong>rue<span>Story 3</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/page1_img3.jpg" alt=""></figure>
                </div>
                This website template has several pages:<a href="index" class="link1">Home</a>,<a href="mission" class="link1">Our Mission</a>,<a href="news" class="link1">News and Press</a>,<a href="help" class="link1">How to Help</a>,<a href="donate" class="link1">Donate Us</a>.<a href="help" class="button1 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <h3>Our Mission</h3>
        <p class="quot"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid- idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci- tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.<img src="images/quot2.png" alt=""> </p>
      </div>
      <div class="wrapper">
        <div class="box2">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h4><span>June 31</span>2011</h4>
                <p class="pad_bot2"><strong>Ned ut perspiciatis unde omnis</strong></p>
                <p>Natus error sit voluptatem accusantium doloremque laudantium.</p>
                <a href="news" class="button2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h4 class="color2"><span>June 29</span>2011</h4>
                <p class="pad_bot2"><strong>At veroeos et accusamus etiusto</strong></p>
                <p>Architecto beatae vitae dicta sunt explicabo emo enim ipsam.</p>
                <a href="news" class="button2 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h4 class="color3"><span>June 17</span>2011</h4>
                <p class="pad_bot2"><strong>Temporibus quibusdam</strong></p>
                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <a href="news" class="button2 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      </div>
    </article>
    <!-- / content -->

 <script type="text/javascript">Cufon.now();</script>
 <script type="text/javascript">
 $(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
 </script>

@endsection
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
        <li class="active"><a href="index">Home</a></li>
        <li><a href="mission">Our Mission</a></li>
        <li ><a href="news">News &amp; Press</a></li>
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
        <li id="menu_active"><a href="index">Home</a></li>
        <li><a href="mission">Our Mission</a></li>
        <li><a href="news">News &amp; Press</a></li>
        <li><a href="help">How to Help</a></li>
        <li><a href="donate">Donate</a></li>
      </ul>
    </nav>
  </div>
  <div class="slider">
    <ul class="items">
      <li> <img src="images/img1.jpg" alt="">
        <div class="banner">
          <div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
          <div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
        </div>
      </li>
      <li> <img src="images/img2.jpg" alt="">
        <div class="banner">
          <div class="wrapper"><span>“MAKE all the CHILDREN</span></div>
          <div class="wrapper"><strong>of the World HAPPY”</strong></div>
        </div>
      </li>
      <li> <img src="images/img3.jpg" alt="">
        <div class="banner">
          <div class="wrapper"><span>“TOGETHER we can CHANGE</span></div>
          <div class="wrapper"><strong>Many Young LIVES”</strong></div>
        </div>
      </li>
    </ul>
    <ul class="pagination">
      <li id="banner1"><a href="#">Make<span>Donations</span></a></li>
      <li id="banner2"><a href="#">join<span>volunteer</span></a></li>
      <li id="banner3"><a href="#">Help<span>children</span></a></li>
    </ul>
  </div>
</header>
@endsection
