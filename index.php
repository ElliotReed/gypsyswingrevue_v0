<?php
$_POST['$title'] = "Gypsy Swing Revue | Colorado's Premier Gypsy Jazz Swing Band! | Weddings and Events in the Denver and Boulder Area";
include("views/header.php");
include("views/background.php");
include("views/navigation.php");
?>

<!-- BANNER SLIDER -->

<div class="row">
  <div class="large-12 columns">
    <div class="panel mypanel slider-panel">

      <!-- START SLICK SLIDER -->
      <div class="banner-slider">

        <div><img data-interchange="[img/banner-slider-1-640.jpg, (default)], [img/banner-slider-1-1024.jpg, (medium)]">
          <noscript><img src="img/banner-slider-1-640.jpg"></noscript>
        </div>
        <div><img data-interchange="[img/banner-slider-2-640.jpg, (default)], [img/banner-slider-2-1024.jpg, (medium)]">
          <noscript><img src="img/banner-slider-2-640.jpg"></noscript>
        </div>
        <div><img data-interchange="[img/banner-slider-3-640.jpg, (default)], [img/banner-slider-3-1024.jpg, (medium)]">
          <noscript><img src="img/banner-slider-3-640.jpg"></noscript>
        </div>
        <div><img data-interchange="[img/banner-slider-5-640.jpg, (default)], [img/banner-slider-5-1024.jpg, (medium)]">
          <noscript><img src="img/banner-slider-5-640.jpg"></noscript>
        </div>
        <div><img data-interchange="[img/iloveparis-1024-768.jpg, (default)], [img/iloveparis-1024-768.jpg, (medium)]">
          <noscript><img src="img/iloveparis-1024-768.jpg"></noscript>
        </div>

        <!-- END SLICK SLIDER -->
      </div>
    </div>
  </div>
</div>
<!--END BANNER SLIDER -->

<!--FEATURES -->
<div class="row" data-equalizer>
  <div class="medium-6 columns">
    <div class="panel mypanel" data-equalizer-watch>

      <img src='img/COsBest.gif' alt="Colorado's Prmier Gypsy Jazz Band" />

      <p>&nbsp;</p>
      <blockquote>"Gypsy Swing Revue is ABSOLUTELY the best django/gypsy jazz/parisian jazz/hot club band in Colorado…"<cite>Dazzle Jazz</cite>
      </blockquote>

      <blockquote>"...the band is ridiculously talented... ” <cite>Denver Post</cite>
      </blockquote>

      <blockquote>"..sweet and brilliant.."<cite>KUVO 89.3 FM</cite>
      </blockquote>

      <blockquote>"..favorite band...in the style of Django Reinhardt and Stéphane Grappelli..” <cite>Fox News</cite>
      </blockquote>

      <blockquote class="blockqoute-reverse">"Thank you so much for the beautiful and highly entertaining music you and the Gypsy Swing Revue ensemble played on Saturday night. We received multiple compliments on your performance...It truly capped off a memorable evening celebrating Opera Colorado’s 35th anniversary.”<footer><cite title="Fox News">Ben Newman, Executive and Special Projects Coordinator, Opera Colorado</footer></cite>
      </blockquote>

    </div>
  </div>

  <div class="medium-6 columns">
    <div class="panel mypanel" data-equalizer-watch>
      <h5>Gypsy Swing Revue</h5>
      <div class="flex-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLkZtnr8a44fxTPbGOBHvDNGW3IeO_u6lX" frameborder="0" allowfullscreen>
        </iframe>
      </div>

      <a href="/iloveparis">
        <h5>Gypsy Swing Revue's "I Love Paris!"ft. Kristi Stice</h5>
      </a>
      <div class="flex-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLkZtnr8a44fw0idJD2PiqqfyaIW5VxDIl" frameborder="0" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>

</div>
<!--END FEATURES -->

<!--SCHEDULE-->
<ul class="accordion" data-accordion></ul>
<!--false call to make accordion work-->
<div id="schedule"></div>
<!--schedule place holder-->
<script>
  $(function schedule() {
    $("#schedule").html("<i class='fa fa-spinner fa-pulse'></i>").show();
    var type = "2weeks";
    var url = 'php/schedule-handler.php';
    $.post(url, {
      contentVar: type
    }, function(data) {
      $("#schedule").html(data).show();
    });
  })
</script>
<!--END SCHEDULE-->

<!--MAIL LIST-->
<div class='row'>
  <div class="medium-12 columns">
    <div class="panel mypanel">
      <h4>Join Our Mail List!</h4>
      <div class="row">
        <div class="medium-9 columns">
          <p>We'll keep you up to date on special shows!</p>
        </div>
        <div class="medium-3 columns">
          <a href='views/subscribe.php' class='radius button right'>Subscribe</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END MAIL LIST-->

<!--CONTACT-->
<div class="row">
  <div class="medium-12 columns">
    <div class="panel mypanel">
      <h4>Contact Us!</h4>
      <div class="row">
        <div class="medium-9 columns">
          <subheader>303.745.7944</subheader>
        </div>
        <div class="medium-3 columns">
          <a href="/contact" class="radius button right">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END CONTACT-->

<?php
include("views/footer.php");
?>