$(document).ready(function(){
	$('.list-group-item').mouseover(function(index){
		$(this).css('background-color','red')
	});
	
	$('.list-group-item').mouseout(function(index){
		$(this).css('background-color','white')
	});
	
	$('img').hover(function(){
		$(this).css('border','4px solid red');
	});
	
	$('img').mouseout(function(){
		$(this).css('border','');
	});
	
	$('#deals').hover(function(){
		$(this).css({'color' : 'red',
		'background-color' : 'cyan',
		'font-size' : '30px'
		});
	});
	
	$('#deals').mouseout(function(){
		$(this).css({'color' : 'black',
		'background-color' : '',
		'font-size' : ''
		});
	});

});