.content div {
	margin: 35px auto;
}

.container div h3 {
	margin-bottom: 20px;
}

/* HOMEPAGE STYLE ***********************************************/

.home p {
	text-align: justify;
	padding: 0 15px;
}

/* TOPIC STYLE ***********************************************/

.topic ul, .topic p {
	text-align: left;
}

.topic ul ul {
	margin-bottom: 5px;
	list-style-type: circle;
}

.topic ul li {
	margin: 2px auto;
}

/* CALLFORPAPERS STYLE ***********************************************/

.callforpapers p {
	text-align: justify;
	padding: 0 15px;
}

/* SUBMISSION STYLE ***********************************************/

.submission p {
	text-align: justify;
	padding: 0 15px;
}

/* DATES STYLE ***********************************************/

.dates p {
	text-align: left;
	padding: 0 0 0 100px;
}

.dates strike {
	text-decoration: line-through;
}

/* KEYNOTES STYLE **************************/
.keynotes .keynote {
	
}

.keynotes .keynote p {
	text-align: left;
	padding-left: 15px;
	padding-right: 15px;
}

.keynotes .keynote a {
	cursor: pointer;
}

/* ORGANIZATION STYLE ***********************************************/
.organization {
	margin-bottom: 1px!important;
}

.organization h3 {
	margin-bottom: 10px!important;
}

.organization h4 {
	margin: 8px 0px !important;
}

.organization table {
	margin: auto;
	width: 90%;
	text-align: left;
	font-size: 0.95em;
}

.organization table th {
	color: <?php echo $fc?>;
	font-weight: 600;
	padding-top: 20px;
}

.organization .mailto {
	cursor: pointer;
}

.organization .mailto:hover {
	color: <?php echo $sc?>;
}

/* PREVIOUS WORKSHOP STYLE ********************************************/

.previous ul {
	list-style-type: none;
	text-align: left;
}

.previous ul li {
	margin-left: 10px;
}

.previous ul li a {
	text-decoration: none;
	cursor: pointer;
	color: <?php echo $pc?>;
	font-weight: 600;
}

.previous ul li:hover a {
	text-decoration: underline;
	cursor: pointer;
	color: <?php echo $tc?>;
}