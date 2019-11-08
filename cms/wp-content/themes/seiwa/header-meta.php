<link href="/css/reset.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<!-- ブラウザの横幅が641px以上の場合 -->
<link href="/css/pc.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" />
<!-- ブラウザの横幅が641px以上、1200px以下の場合 -->
<link href="/css/tb.css" rel="stylesheet" type="text/css" media="screen and (min-width: 641px) and (max-width: 1200px)" />
<!-- ブラウザの横幅が640px以下の場合 -->
<link href="/css/sp.css" rel="stylesheet" type="text/css" media="screen and (max-width: 640px)" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> 
<script type="text/javascript">
  $(function(){
    var ua = navigator.userAgent;
    if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
        $('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
    } else {
        $('head').prepend('<meta name="viewport" content="width=1200">');
    }
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script src="/js/common.js"></script>
<script src="/js/wow.js"></script>
<script>
  wow = new WOW(
    {
        offset:200
    }
  );
  wow.init();
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'pau4mus',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
    setTimeout(function () {
        document.getElementsByTagName("html")[0].classList.add("loading-delay");
    }, 3000);
</script>
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
