var $j = jQuery.noConflict();

$j(document).ready(function(){

	/* Binding for left aside links */
	$j('.bt.menu').bind('click', function(evt){
		evt.preventDefault();
		$j.ajax({
		    url: 'pages/'+$j(evt.currentTarget).attr('id')+'.php',
		    type: 'GET',
		    async: false,
		    success: function(data){
				baseUrl = document.location.href.substring(0, document.location.href.indexOf('?'))
				window.history.pushState(window.history.state, 
										'PersDB 13 - '+$j(evt.currentTarget).attr('id'), 
										baseUrl+'?page='+$j(evt.currentTarget).attr('id'));
				$j('.content').html(data);
			
				$j.each($j('.bt.menu'), function(index, value){
					if ($j(value).hasClass('active'))
						$j(value).removeClass('active');
				});
				$j(evt.currentTarget).addClass('active');
			}
		});
	});
});