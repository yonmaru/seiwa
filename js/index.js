// JavaScript Document
$(window).load(function(){
	$('.split').css('display','none');
	setTimeout(function(){
        $('.split').fadeIn(1000);
	},1000);
	setTimeout(function(){
        $('.split').fadeOut('slow');
	},4500);
	setTimeout(function(){
		$('.openinglogo').fadeIn('slow');
	},5000);
	setTimeout(function(){
        $('.opening').fadeOut(2000);
        $('.header').fadeIn(2000);
	},7500);
});

$(window).scroll(function() {
    $('.header').fadeIn(500);
});


$(function(){
    var setElm = $('.split'),
    delaySpeed = 80,
    fadeSpeed = 0;
 
    setText = setElm.html();
 
    setElm.css({visibility:'visible'}).children().addBack().contents().each(function(){
        var elmThis = $(this);
        if (this.nodeType == 3) {
            var $this = $(this);
            $this.replaceWith($this.text().replace(/(\S)/g, '<span class="textSplitLoad">$&</span>'));
        }
    });
    $(window).load(function(){
        setTimeout(function(){
            splitLength = $('.textSplitLoad').length;
            setElm.find('.textSplitLoad').each(function(i){
                splitThis = $(this);
                splitTxt = splitThis.text();
                splitThis.delay(i*(delaySpeed)).css({display:'inline-block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
            });
            setTimeout(function(){
                    setElm.html(setText);
            },splitLength*delaySpeed+fadeSpeed);
        },1000);
    });
});

