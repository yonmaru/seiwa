<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128371741-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128371741-1');
</script>
<meta charset="utf-8">
<title>会社概要｜株式会社清和工業</title>
<meta name="description" content="株式会社清和工業の会社概要ページです。">
<meta name="keywords" content="">
<!-- ***** Start Meta Area ***** -->
<?php get_header('meta'); ?>
<!-- ***** //End Meta Area ***** -->
</head>
<body id="aboutus">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_header(); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
		<section class="pagemv">
            <h1 class="pagetitle en"><p class="wow fadeInDown" data-wow-delay="1s">About us</p><span class="wow fadeIn" data-wow-delay="1s">会社概要</span></h1>
		</section>
        <?php
        if(have_posts()): while(have_posts()): the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <div class="bottompadding hidden-pc"></div>
	</article>
	<!-- ***** Start Footer Area ***** -->
	<?php get_footer(); ?>
	<!-- ***** //End Footer Area ***** -->
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> 
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script>
    function initMap() {
        var latlng = new google.maps.LatLng( 36.444268, 139.992374 );
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: latlng,
            mapTypeControl: false,
            streetViewControl: false,
        });
			
        //マーカーの設定
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: new google.maps.MarkerImage(
               '/img/aboutus/pin.png',//マーカー画像URL
                new google.maps.Size(74, 87),//マーカー画像のサイズ
                new google.maps.Point(0, 0),//マーカー画像表示の起点（変更しない）
                new google.maps.Point(37, 87)//マーカー位置の調整
            ),  
        });
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?language=ja&key=AIzaSyDzjdy_20KD1UZnXo0U-qkYWIJf27CtIWg&callback=initMap"></script>
</body>
</html>
