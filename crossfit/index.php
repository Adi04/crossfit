<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crossfit</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  
   <script>
	$(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10
  });
});</script>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<script src="js/jquery.bxslider.js"></script>
</head>

<body>

<?php include('header.php'); ?>

<div class="slider">
	  <!-- Slideshow 4 -->
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
          <img src="images/1.jpg" alt="">
          <div class="caption">
          		<h3>If you’re looking to get started doing</h3>
                <h2>CrossFit in Markham, Thornhill <br>or Richmond Hill</h2><br>
                <p>we’re here and ready to hear from you – call us today!</p>
                <p>CrossFit For Heart – To make a donation, please click Bellow…</p><br><br>
                <a href="">Click Here</a>
          </div>
        </li>
        <li>
          <img src="images/1.jpg" alt="">
          <div class="caption">
          		<h3>If you’re looking to get started doing</h3>
                <h2>CrossFit in Markham, Thornhill <br>or Richmond Hill</h2><br>
                <p>we’re here and ready to hear from you – call us today!</p>
                <p>CrossFit For Heart – To make a donation, please click Bellow…</p><br><br>
                <a href="">Click Here</a>
          </div>
        </li>
      </ul>
    </div>
</div>

<div class="info">
    <div class="container">
    	<a href=""><img src="images/z1.jpg" class="item"></a>
        <a href=""><img src="images/z2.jpg" class="item" style="margin:8px 1%"></a>
        <a href=""><img src="images/z3.jpg" class="item"></a>
        <div class="clear"></div>
        <a href=""><img src="images/z4.jpg" class="item"></a>
        <a href=""><img src="images/z5.jpg" class="item" style="margin:8px 1%"></a>
        <a href=""><img src="images/z6.jpg" class="item"></a>
        <div class="clear"></div><br><br>
        <center><h4>Welcome To CrossFit Solid Ground!</h4></center>
        <center><h5>Thank you for visiting CrossFitSolidGround.com – <span style="color:#bf0d0d">Providing CrossFit Training in Markham, Thornhill and <br>Richmond Hill</span> – we hope you stay for a while and come back often!</h5></center><br>
        <img src="images/z7.jpg" style="float:right; margin-left:20px;">
        <p style="text-align:justify;">The Solid Ground Athletic Academy is an “Elite School of Fitness” serving the Markham, Thornhill and Richmond Hill CrossFit communities and athletes of every kind.  We work with people – weekend warriors, high level athletes and everyone in between – helping them take their fitness and their quality of life to a whole new level.  If you’re looking for CrossFit in Markham, CrossFit in Thornhill, or CrossFit in Richmond Hill, you’ve come to the right place.</p>
        <div class="clear"></div><br>
    </div>
</div>

<div class="bgimg">
	<div class="container">
    	<div class="div50">
        	<h3>Are You…</h3>
            
            <ul>
            	<li>Tired of the same old fitness routine…?</li>
                <li>Looking for something NEW and DIFFERENT…?</li>
                <li>Ready to get in the BEST shape of your LIFE…?</li>
                <li>Looking for a COMMUNITY of people to TRAIN with…?</li>
                <li>Looking for safe, effective, high-quality COACHING from trained professionals…?</li>
            </ul>
        </div>
        <div class="div50" style="float:right">
        	<h3>We can help!!</h3>
            <h4>CrossFit in Markham, Thornhill, Richmond Hill…</h4>
            <p>We specialize in a few specific areas, including:  <strong style="color:#fff;">CrossFit and Functional Fitness, Personal Training, Team Training and Sport Specific Training for Athletes</strong></p>
        </div>
    </div>
</div>

<div class="info">
	<div class="container">
    	<br><br>
        <h6>What is CrossFit?</h6>
        <img src="images/x1.jpg" style="float:right; margin-left:20px">
        <p>CrossFit is “the sport of fitness.” It is a program of strength and conditioning that is broad and inclusive, with workout regimes that have been adopted from those of the military, police force, and martial artists. These programs are scalable, high intensity, and varied. Each program has a timed component that gives participants the ability to track their performance and strive for new personal bests.  CrossFit training is typically done in a class format, where a coach leads and directs participants through a series of skills and a prescribed workout routine that is new and different each day.  It is a highly effective method of training for anyone who is serious about their health and fitness, and the results speak for themselves.</p>
        <div class="clear"></div>
        <h6>Why Broad?</h6>
        <img src="images/x2.jpg" style="float:right; margin-left:20px">
        <p>Crossfit, as a program, was created for those looking to improve upon their overall fitness. Specialization is not in our vocabulary. In fact, it is punished. These workouts are designed to benefit everyone, not just those looking to lift more, run faster, or jump higher. After some dedicated training, you will be able to do all three and more!</p>
        <div class="clear"></div>
        <h6>Why Scalable?</h6>
        <img src="images/x3.jpg" style="float:right; margin-left:20px">
        <p>Crossfit is all about inclusion. An elderly woman and a 20-something in their prime are probably not going to be able to lift at the same level. But, they could both complete the same workout, at a different pace, with different amounts of weight. Scalability = Versatility.  Everyone can do this, and everyone is welcome!!
For more information or background on CrossFit, you can visit <strong><em>www.crossfit.com.</em></strong></p>
		<div class="clear"></div><br><br><br>
    </div>
</div>

<div class="bgimg" style="background-image:url(images/x6.jpg)">
	<div class="container">
    	<center><h3>Testimonials</h3></center>
        <div class="div50">
        	<div class="image">
            	<img src="images/x4.jpg">
            </div>
            <div class="text">
            	<p>Justin is just such a phenomenal coach. He sees things that other people don't see, and is able to communicate in a way that gets you the result you want. I never thought I could lift so much!</p>
                <p style="color:#3070a8"><em>- Adrianna</em></p>
            </div>
        </div>
        <div class="div50" style="float:right;">
        	<div class="image">
            	<img src="images/x5.jpg">
            </div>
            <div class="text">
            	<p>The transformation of my body has been amazing, and the community is the BEST. I've made such good friends, and love my CrossFit family!</p>
                <p style="color:#3070a8"><em>- John</em></p>
            </div>
        </div>
        
    </div>
</div>

<div class="info">
	<div class="container">
    	<br>
    	<h3>Blog</h3>
        <div class="div50">
       		<img src="images/x7.jpg" style="float:left; margin-right:15px; margin-bottom:20px">
            <h5 style="color:#000; margin:0; font-weight:bold;">Lorem ipsum dolor sit amet, </h5>
            <p style="margin:0;">June 28th, 2015</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa  .....</p>
            <a href="" class="link">Read More</a>
        </div>
        <div class="div50" style="float:right;">
       		<img src="images/x7.jpg" style="float:left; margin-right:15px; margin-bottom:20px">
            <h5 style="color:#000; margin:0; font-weight:bold;">Lorem ipsum dolor sit amet, </h5>
            <p style="margin:0;">June 28th, 2015</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa  .....</p>
            <a href="" class="link">Read More</a>
        </div>
        <div class="clear"></div><br><br>
    </div>
</div>

<div class="bgimg" style="background-image:url(images/q8.jpg)">
	<div class="container">
    	<br><br>
    	<div class="slider1">
              <div class="slide"><img src="images/q1.jpg"></div>
              <div class="slide"><img src="images/q2.jpg"></div>
              <div class="slide"><img src="images/q3.jpg"></div>
              <div class="slide"><img src="images/q4.jpg"></div>
               <div class="slide"><img src="images/q1.jpg"></div>
              <div class="slide"><img src="images/q2.jpg"></div>
              <div class="slide"><img src="images/q3.jpg"></div>
              <div class="slide"><img src="images/q4.jpg"></div>
            </div>
    </div>
</div>

<div class="info">
	<div class="container">
    	<br><br>
    	<div class="div30">
        	<img src="images/q5.jpg" style="float:left; margin-right:10px; margin-top:-3px">
            <p>93 Green Lane Markham, ON L3T 6K6</p>
            <br>
            <img src="images/q6.jpg" style="float:left;margin-right:10px;">
            <p style=" margin:0;">905-889-2000</p>
            <br>
            <img src="images/q7.jpg" style="float:left;margin-right:10px;">
            <p style="margin:0;">info@crossfitsolidground.com</p>
            <br><br>
            <a href=""><img src="images/face.png" style="float:left; margin:3px;"></a>
            <a href=""><img src="images/tweet.png" style="float:left; margin:3px;"></a>
            <a href=""><img src="images/in.png" style="float:left; margin:3px;"></a>
        </div>
        <div class="div30" style="margin:0 4%">
        	<input type="text" placeholder="Name">
            <input type="text" placeholder="Phone">
            <input type="text" placeholder="Email">
            <textarea>Question</textarea>
            <input type="submit" value="SUBMIT">
        </div>
        <div class="div30">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.5836282048554!2d-79.3931988!3d43.82299529999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2ca5755d8217%3A0x57a47833a0f478ea!2s93+Green+Ln%2C+Thornhill%2C+ON+L3T%2C+Canada!5e0!3m2!1sen!2sin!4v1436647084931" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script src="js/jquery.meanmenu.js"></script>
<script>
	jQuery(document).ready(function () {
	    jQuery('nav').meanmenu();
	});
</script>
</body>
</html>