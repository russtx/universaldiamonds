(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
                
                var triggers = $('ul.triggers li');
var images = $('ul.images li');
var lastElem = triggers.length-1;
var target;

triggers.first().addClass('active');
images.hide().first().show();

function sliderResponse(target) {
    images.fadeOut(300).eq(target).fadeIn(300);
    triggers.removeClass('active').eq(target).addClass('active');
}

triggers.click(function() {
    if ( !$(this).hasClass('active') ) {
        target = $(this).index();
        sliderResponse(target);
        resetTiming();
    }
});

$('.next').click(function() {
    target = $('ul.triggers li.active').index();
    target === lastElem ? target = 0 : target = target+1;
    sliderResponse(target);
    resetTiming();
});
$('.prev').click(function() {
    target = $('ul.triggers li.active').index();
    lastElem = triggers.length-1;
    target === 0 ? target = lastElem : target = target-1;
    sliderResponse(target);
    resetTiming();
});

function sliderTiming() {
    target = $('ul.triggers li.active').index();
    target === lastElem ? target = 0 : target = target+1;
    sliderResponse(target);
}

var timingRun = setInterval(function() { sliderTiming(); },5000);
function resetTiming() {
    clearInterval(timingRun);
    timingRun = setInterval(function() { sliderTiming(); },5000);
}

//tabs
var tabs = $('#tabs-titles li'); //grab tabs
var contents = $('#tabs-contents li'); //grab contents

tabs.bind('click',function(){
  contents.hide(); //hide all contents
  tabs.removeClass('current'); //remove 'current' classes
  $(contents[$(this).index()]).show(); //show tab content that matches tab title index
  $(this).addClass('current'); //add current class on clicked tab title
});
// select img
$.fn.showField = function() {
        var selectVal = document.getElementById(this.val() + 'Div');
        return this.each(function() {
            $(selectVal).show().siblings('div').hide();
        });
    };    
    $('select#reportsSelect').change(function() {
        $(this).showField();
    });
	});
	
})(jQuery, this);
