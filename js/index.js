// JavaScript Document
$(document).ready(function(){
	$('.header').css('display','none');
    $('.split').fadeIn(2000);
	setTimeout(function(){
        $('.split').fadeOut('slow');
	},3500);
	setTimeout(function(){
		$('.openinglogo').fadeIn('slow');
	},4000);
	setTimeout(function(){
        $('.opening').fadeOut(2000);
        $('.header').fadeIn(2000);
	},6500);
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
        splitLength = $('.textSplitLoad').length;
        setElm.find('.textSplitLoad').each(function(i){
            splitThis = $(this);
            splitTxt = splitThis.text();
            splitThis.delay(i*(delaySpeed)).css({display:'inline-block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
        });
        setTimeout(function(){
                setElm.html(setText);
        },splitLength*delaySpeed+fadeSpeed);
    });
});

