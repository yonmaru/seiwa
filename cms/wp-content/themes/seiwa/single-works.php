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
<title>施工事例（<?php the_title(); ?>）｜株式会社清和工業</title>
<meta name="description" content="株式会社清和工業の施工事例（<?php the_title(); ?>）ページです。">
<meta name="keywords" content="">
<!-- ***** Start Meta Area ***** -->
<?php get_header('meta'); ?>
<!-- ***** //End Meta Area ***** -->
<link rel="stylesheet" type="text/css" href="/js/slick/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/js/slick/slick-theme.css" media="screen" />
</head>
<body id="works">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_header(); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article" class="single">
        <div class="inner wow fadeInUp">
            <?php $sgimage1 = get_field('sg-image1'); ?>
            <?php $sgimage2 = get_field('sg-image2'); ?>
            <?php $sgimage3 = get_field('sg-image3'); ?>
            <?php $sgimage4 = get_field('sg-image4'); ?>
            <?php $sgimage5 = get_field('sg-image5'); ?>
            <div class="slider-wrapper">
                <ul class="works-slider">
                    <?php if($sgimage1){ echo '<li><img src="'.$sgimage1.'"></li>'; } ?>
                    <?php if($sgimage2){ echo '<li><img src="'.$sgimage2.'"></li>'; } ?>
                    <?php if($sgimage3){ echo '<li><img src="'.$sgimage3.'"></li>'; } ?>
                    <?php if($sgimage4){ echo '<li><img src="'.$sgimage4.'"></li>'; } ?>
                    <?php if($sgimage5){ echo '<li><img src="'.$sgimage5.'"></li>'; } ?>
                </ul>
                <ul class="works-slider-nav">
                    <?php if($sgimage2){ echo '<li class="thumbnail-item"><img src="'.$sgimage1.'"></li>'; } ?>
                    <?php if($sgimage2){ echo '<li class="thumbnail-item"><img src="'.$sgimage2.'"></li>'; } ?>
                    <?php if($sgimage3){ echo '<li class="thumbnail-item"><img src="'.$sgimage3.'"></li>'; } ?>
                    <?php if($sgimage4){ echo '<li class="thumbnail-item"><img src="'.$sgimage4.'"></li>'; } ?>
                    <?php if($sgimage5){ echo '<li class="thumbnail-item"><img src="'.$sgimage5.'"></li>'; } ?>
                </ul>
            </div>
            <?php $sgzipcode = get_field('sg-place_zipcode'); ?>
            <?php $sgadd1 = get_field('sg-place_add1'); ?>
            <?php $sgadd2 = get_field('sg-place_add2'); ?>
            <?php $sgdate = get_field('sg-date'); ?>
            <?php $sgfeature = get_field('sg-feature'); ?>
            <h2 class="works-title"><?php the_title(); ?></h2>
            <dl class="works-place">
                <dt><span>施工場所</span></dt>
                <dd><?php if($sgzipcode){ echo '〒'.$sgzipcode.'　'; } ?><br class="hidden-pc"><?php echo $sgadd1; ?>　<br class="hidden-pc"><?php echo $sgadd2; ?></dd>
            </dl>
            <dl class="works-date">
                <dt><span>完成年月</span></dt>
                <dd><?php echo $sgdate; ?></dd>
            </dl>
            <dl class="works-feature">
                <dt><span>特徴</span></dt>
                <dd><?php echo $sgfeature; ?></dd>
            </dl>
        </div>
        <?php $sglatlng = get_field('sg-latlng'); ?>
        <?php $sgzoom = get_field('sg-zoom'); ?>
        <?php $sglatlng2 = str_replace(array(' ', '　'), '', $sglatlng); ?>
        <section class="map">
            <a href="https://www.google.com/maps/@<?php echo $sglatlng2; ?>,<?php echo $sgzoom; ?>z?hl=ja-JP" target="_blank" class="mapbtn">拡大地図を表示</a>
            <div id="map"></div>
        </section>
        <div class="backbtn wow fadeInUp">
            <a href="<?php echo home_url(); ?>/works/" class="arrow arrow4 btn1">一覧へ戻る</a>
        </div>
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
        var latlng = new google.maps.LatLng( <? echo $sglatlng2; ?> );
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: <? echo $sgzoom; ?>,
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
<script src="/js/slick/slick.min.js"></script>
<script type="text/javascript">
$(function(){
  var slider = ".works-slider"; // スライダー
  var thumbnailItem = ".works-slider-nav .thumbnail-item"; // サムネイル画像アイテム
  
  // サムネイル画像アイテムに data-index でindex番号を付与
  $(thumbnailItem).each(function(){
   var index = $(thumbnailItem).index(this);
   $(this).attr("data-index",index);
  });
  
  // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
  // 「slickスライダー作成」の前にこの記述は書いてください。
  $(slider).on('init',function(slick){
   var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
   $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
  });

  //slickスライダー初期化  
  $(slider).slick({
    autoplay: true,
    arrows: true,
    fade: false,
    infinite: true //これはつけましょう。
  });
  //サムネイル画像アイテムをクリックしたときにスライダー切り替え
  $(thumbnailItem).on('click',function(){
    var index = $(this).attr("data-index");
    $(slider).slick("slickGoTo",index,false);
  });
  
  //サムネイル画像のカレントを切り替え
  $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
    $(thumbnailItem).each(function(){
      $(this).removeClass("thumbnail-current");
    });
    $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
  });
});
</script>
</body>
</html>
