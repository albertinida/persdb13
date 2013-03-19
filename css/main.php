<?php
	header('content-type: text/css');

	// Palette colors definition
	// background, primary, secondary, tertiary and fourth
	$bg = '#FFFFFF';
	$pc = '#165821';
	$sc = '#00792A';
	$tc = '#4F6ECA';
	$fc = '#81221B';

?>


@font-face {
	font-family: 'Lucida';
		src: url('fonts/lucida_sans_regular-webfont.eot');
		src: url('fonts/lucida_sans_regular-webfont.eot?#iefix') format('embedded-opentype'),
				 url('fonts/lucida_sans_regular-webfont.woff') format('woff'),
				 url('fonts/lucida_sans_regular-webfont.ttf') format('truetype'),
				 url('fonts/lucida_sans_regular-webfont.svg#lucida_sansregular') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Lucida';
		src: url('fonts/lucida_sans_demibold_roman-webfont.eot');
		src: url('fonts/lucida_sans_demibold_roman-webfont.eot?#iefix') format('embedded-opentype'),
				 url('fonts/lucida_sans_demibold_roman-webfont.woff') format('woff'),
				 url('fonts/lucida_sans_demibold_roman-webfont.ttf') format('truetype'),
				 url('fonts/lucida_sans_demibold_roman-webfont.svg#lucida_sansdemibold_roman') format('svg');
	font-weight: bold;
	font-style: normal;
}

body {
	background-color: <?php echo $bg ?>;
	cursor: default;
	font-family: "Lucida", Arial, Helvetica, sans-serif;
}

body div {
	background-color: transparent;
}

.header, .container {
	width: 1100px;
	text-align: center;
	margin: auto;
}

.wrapper {
	height: 700px;
}

.aside {
	width: 200px;
	float: left;
}

.footer {
	background: transparent;
	width: 1080px;
	height: 149px;
	border-top: 1px solid black;
	margin: 0 10px 0 10px;
	/* for border overlap */
	position: relative;
	top: -1px;
}

/* HEADER STYLE *****************************************************/

.header {
	height: 120px;
	padding-top: 30px;
	margin-bottom: 5px;
}

.header h2, .header h3, .header h4, .header h5 {
	/*       T   R   B   L */
	margin: 2px 0px 2px 0px;
	text-align: left;
}

.header h2, .header h3 {
	color: <?php echo $pc ?>;
}

.header .persdbLogo {
	float: left;
	width: 120px;
	height: 120px;
	background-image: url('images/persdb-logo.gif');
	background-size: 100% 100%;
}

.header .title {
	float:left;
	padding: 0 0 0 15px;
	width: 715px;
	height: 120px;
}

.header .vldbLogo {
	float: left;
	width: 250px;
	height: 100%;
	background-image: url('images/vldb-logo.png');
	background-size: 100%;
	background-repeat: no-repeat;
}

/* LEFT ASIDE STYLE *************************************************/
.left ul {
	list-style-type: none;
	padding-left: 5px;
	background: url('images/menu-bg.png') repeat-y;
	border: 2px solid transparent;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}

.left ul li.border {
	height: 5px;
}

.left ul li {
	color: <?php echo $fc ?>;
	text-align: left;
	font-weight: 600;
	margin-top: 5px;
	margin-bottom: 3px;
	border-bottom: 2px solid transparent;
}

.left ul li:hover {
	border-bottom: 2px solid <?php echo $pc ?>;
	cursor: pointer;
}

.left ul li.border:hover {
	cursor: default;
	border-bottom: 2px solid transparent;
}

.left ul li.active {
	margin-bottom: 3px;
	border-bottom: 2px solid <?php echo $pc ?>;
}

.left .vldbLogo {
	width: 100%;
	height: 86px;
	background-image: url('images/vldb-logo.png');
	background-size: 100%;
}

/* CONTENT STYLE ****************************************************/

.content {
	padding-top: 20px;
	padding-left: 10px;
	padding-right: 10px;
	margin-bottom: 20px;
	width: 630px;
	height: 660px;
	float: left;
	overflow: auto;
}

.content div {
	width: auto;
}

.content h2, .content h3, .content h4, .content h5 {
	margin: auto;
}

.content h3 {
	color: <?php echo $pc?>;
}

/* RIGHT ASIDE STYLE ************************************************/
.right {
	width: 248px;
	height: 698px;
	border: 1px solid black;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;	
	border-bottom-right-radius: 10px;
}

.right h3 {
	margin: 5px 0 15px 0;
	color: <?php echo $pc ?>;
}

.right p {
	margin: 10px auto 10px auto;
	border-bottom: 1px solid black;
	width: 95%;
}

<?php include('pages.php'); ?>