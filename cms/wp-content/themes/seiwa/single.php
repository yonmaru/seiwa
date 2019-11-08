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
<title>最新情報｜株式会社清和工業</title>
<meta name="description" content="信念を持った人材による丁寧な製品づくりと施工が私たちの強み。清和工業は、社会の基礎を創るという“誇り”を胸に、清和工業は未来へ橋を架け続けています。">
<meta name="keywords" content="">
<!-- ***** Start Meta Area ***** -->
<?php get_header('meta'); ?>
<!-- ***** //End Meta Area ***** -->
</head>
<body id="news">
<div id="wrapper">
	<!-- ***** Start Header Area ***** -->
	<?php get_header(); ?>
	<!-- ***** //End Header Area ***** -->
	<article id="article">
        <div class="pagetitle-static en"><p class="wow fadeInDown" data-wow-delay="0.5s">News</p><span class="wow fadeIn" data-wow-delay="0.5s">最新情報</span></div>
		<section class="section00">
			<div class="inner wow fadeInUp">
                <div class="newswrapper">
                    <div class="newscontents">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <dl>
                            <dt class="newsdate"><?php the_time('Y.m.d'); ?></dt>
                            <dd class="newscat"><?php the_category(' '); ?></dd>
                        </dl>
                        <h1 class="newstitle"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="backbtn">
                    <?php 
                      $category = get_the_category(); 
                      if ( $category[0] ) {
                        echo '<a href="' . get_category_link( $category[0]->term_id ) . '" class="arrow arrow4 btn1">カテゴリ一覧へ戻る</a>';
                      }
                    ?>
                </div>
            </div>
		</section>
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
