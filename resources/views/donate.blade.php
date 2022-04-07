@extends('base')

@section('title', 'Title Donate')
@section('donate')

    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1 wrapper">
            <section class="col1">
              <h2><strong>O</strong>ur<span>Address</span></h2>
              <strong class="address"> Country:<br>
              City:<br>
              Zip Code:<br>
              Telephone:<br>
              Fax:<br>
              E-Mail: </strong> Russia<br>
              Moscow<br>
              10101<br>
              +7 495 111-11-11<br>
              +7 495 222-22-22<br>
              <a href="https://www.google.com/intl/ru/gmail/about/">hopecenter@gmail.com</a> </section>
            <section class="col2 pad_left1">
              <h2 class="color2"><strong>M</strong>iscellaneous<span>info</span></h2>
              <p class="pad_bot1"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. </section>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="pad_left2 relative">
          <h4 class="color3"><span>Contact-Donate</span>Form</h4>
          <img src="images/page6_img1.png" alt="" class="img1">
          <form id="ContactForm" method="get">
            <div>
            <div class="wrapper" style="margin: 10px"><span>Your Name:</span>
                <input type="text" class="input" name="name" style="height: 24px; margin-bottom: 1rem:" required placeholder="Alex Galager">
              </div>
              <div class="wrapper" style="margin: 10px"><span>Your E-mail:</span>
                <input type="text" class="input" name="email" style="height: 24px; margin-bottom: 1rem:" required placeholder="hopecenter@gmail.com">
              </div>
              <div class="textarea_box" style="margin: 10px"><span>Your Message:</span>
                <textarea name="textarea comment" name="comment" cols="1" rows="1"></textarea>
              </div>
              <div class="wrapper" style="margin: 10px"><span>Money donate:</span>
                <input type="numb" class="input" name="money" style="height: 24px; margin-bottom: 1rem:" required placeholder="1000 rub">
              </div>

              <div class="wrapper" style="margin: 10px"><span>Credit Card Number</span>
                <input class="input card" name="card" style="height: 24px; margin-bottom: 1rem:" type="text" required placeholder="0000 0000 0000 0000" autocomplete="email">
              </div>
              <div class="wrapper" style="height: 60px">
                        <div class="col1 month" style="margin: 10px; width: 180px">
                            <span>Month</span>
                            <input class="input" name="month" style="height: 24px; width: 60px" type="text" required>
                        </div>
                        <div class="col1 " style="margin: 10px; width: 150px">
                          <span style="width: 60px;">Year</span>
                          <input type="text" class="input year" name="year" style="height: 24px; width: 60px" required>
                        </div>
                        <div class="col1 " style="margin: 10px; width: 150px">
                                <span style="width: 80px;">CVV/CVC</span>
                                <input class="input cvv" name="cvv" style="height: 20px; width: 60px" id="cvv" type="text" required placeholder="123">

                        </div>
              </div>
            </div>
            <div class="wrap" style="float: right; width:140px">
              <button type="submit"  class="button2 color3"><a href="posts">Send</a></button>
            </div>

          </form>
        </div>
      </div>
    </article>
    <!-- / content -->


<script type="text/javascript">Cufon.now();</script>
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
        <li ><a href="index">Home</a></li>
        <li><a href="mission">Our Mission</a></li>
        <li ><a href="news">News &amp; Press</a></li>
        <li><a href="help">How to Help</a></li>
        <li class="active"><a href="donate">Donate</a></li>
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
        <li><a href="news">News &amp; Press</a></li>
        <li><a href="help">How to Help</a></li>
        <li id="menu_active"><a href="donate">Donate</a></li>
      </ul>
    </nav>
  </div>

</header>
@endsection
