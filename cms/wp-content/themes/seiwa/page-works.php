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
<title>施工事例｜株式会社清和工業</title>
<meta name="description" content="株式会社清和工業の会社概要ページです。">
<meta name="keywords" content="">
<!-- ***** Start Meta Area ***** -->
<?php get_header('meta'); ?>
<!-- ***** //End Meta Area ***** -->
</head>
<body id="works">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_header(); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
        <h1 class="pagetitle-static en"><p class="wow fadeInDown" data-wow-delay="0.5s">Works</p><span class="wow fadeIn" data-wow-delay="0.5s">施工事例</span></h1>
        <div class="inner wow fadeInUp">
            <div class="works-boxes">
                <?php $args = array(
                    'numberposts' => 200,
                    'post_type' => 'works'
                );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="works-box">
                    <?php $sgimage1 = get_field('sg-image1'); ?>
                    <?php $sgzipcode = get_field('sg-place_zipcode'); ?>
                    <?php $sgadd1 = get_field('sg-place_add1'); ?>
                    <?php $sgadd2 = get_field('sg-place_add2'); ?>
                    <a  href="<?php the_permalink(); ?>" class="works-indeximage" style="background-image: url(<?php echo $sgimage1; ?>);"></a>
                    <h3 class="works-indextitle"><?php the_title(); ?></h3>
                    <ul>
                        <li><?php if($sgzipcode){ echo '〒'.$sgzipcode.''; } ?>&nbsp;</li>
                        <li><?php echo $sgadd1; ?>&nbsp;</li>
                        <li><?php echo $sgadd2; ?>&nbsp;</li>
                    </ul>
                    <div class="detailbtn">
                        <a href="<?php the_permalink(); ?>" class="arrow arrow5 btn2">詳細を見る</a>
                    </div>
                </div>
                <?php endforeach; endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="backbtn works-index wow fadeInUp">
            <a href="<?php echo home_url(); ?>/" class="arrow arrow4 btn1">Topへ戻る</a>
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
</body>
</html>
