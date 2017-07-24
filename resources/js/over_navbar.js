function showNavbar(){
	if($('.over-navbar').data('opened') === false){

		$('.over-navbar').animate(
			{
				width : '98%',
				height : '98%',
				top : '2%',
				left : '2%',
				opacity : 1
			}, 400, function(){
				$('.over-navbar').animate(
					{
						width : '100%',
						height : '100%',
						top : 0,
						left : 0
					}, 100, function(){
						$('.over-navbar').data('opened', true);

				});
		});
	}
	
}

function hideNavbar(){
	if($('.over-navbar').data('opened') === true){
		$('.over-navbar').animate(
			{
				width : '0%',
				height : '0%',
				top : '0%',
				left : '0%',
				opacity : 0.25
			}, 200, function(){
				$('.over-navbar').data('opened', false);
			});
	}
}
$(document).ready(function(){

	//click event for opening the navbar
	$('.navbar-toggle').click(function(){
		showNavbar();
	});

	//click event for closing the navbar
	$('.over-navbar .close').click(function(){
		hideNavbar();
	});

	//keyup esacpe event for closing the navbar
	$(document).keyup(function(event){

		if(event.which === 27)
			hideNavbar();

	});

	$('.over-navbar').click(function(e){

		//if you click anywhere outside of the content of the navbar while it is opened
		//you hide it
		if( $(e.target).hasClass('over-navbar') )
			hideNavbar();
	 
	});

	$('ul[data-list="nested"]').eq(0).nestingListShow();

});