$(document).ready(function()
{
$('#sec0').fadeIn(1000, function(){
	$('#sec1').fadeIn('slow', function(){
		$('#sec2').fadeIn('slow', function(){
			$('#sec3').fadeIn('slow', function(){
				$('#sec4').fadeIn('slow', function(){
					$('#sec5').fadeIn('slow');
				});
			});
		});
	});
});
$('#footer').fadeIn(5500);
$('#secError').fadeIn(500, function(){
	$('#secError').animate({top: '10px'}, function(){
		$('#footer').animate({top: '50px'});
	});
});
});