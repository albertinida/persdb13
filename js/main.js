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
			
				$j.each($j('li.bt.menu'), function(index, value){
					if ($j(value).hasClass('active'))
						$j(value).removeClass('active');
				});
				$j(evt.currentTarget).addClass('active');
			}
		});
	});
	
	bindEmailContacts();
});

/* Binding for organization contacts */
function bindEmailContacts() {
	$j('.organization td').unbind('click');
	$j('.organization td').bind('click', function(evt){
		if (typeof $j(evt.currentTarget).attr('data-name') != 'undefined') {
			window.open('mailto:'+$j(evt.currentTarget).attr('data-name')+'@'+$j(evt.currentTarget).attr('data-domain')+'?subject=Information about PersDB 2013');
		} else {
			return false;
		}
	});
}
