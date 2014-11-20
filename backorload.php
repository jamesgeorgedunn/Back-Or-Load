<?php
	function backorload($slug) {
		$url = $_SERVER['HTTP_HOST'];
		echo "if (document.referrer == '') { window.location.href = 'http://$url/$slug' } else { history.back()}";
	}
?>