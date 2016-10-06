<?php
$dbhost = 'ntut-esports.servegame.com:33060';
$dbuser = 'project';
$dbpass = 'bared';
$dbname = 'touchboard_app';
/* 建立資料庫連線 */
$con=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) ;
/* 設定語系 */
mysqli_query($con,"SET NAMES 'UTF8'");
/* 資料庫名稱 */
//$result=mysqli_query($con,"SELECT * FROM records");
//$sql = "selet * from records";
//$result = mysql_query($sql);
/*while($row = mysqli_fetch_array($result)){
echo $row['id']." ";
echo $row['device']." ";
echo $row['time'];
echo "<br>";
}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bare Conductive</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/stylesheets/main.css" />
	</head>
	<body>
		<!-- Wrapper-->
		<div id="wrapper">
			<!-- Nav -->
			<nav id="nav">
				<a href="#me" class="icon fa-home active"><span>Home</span></a>
				<a href="#detail" class="icon fa-list-ul"><span>Details</span></a>
			</nav>
			<!-- Main -->
			<div id="main">
				<!-- Me -->
				<article id="me" class="panel">
					<table class="default">
						<tr>
							<th>Position</th>
							<th>People</th>
							<th>Time</th>
						</tr>
						
						<?php
						$result=mysqli_query($con,"SELECT * FROM records");

						while($row = mysqli_fetch_array($result)) {
						?>
						<tr>
							<td><a href="#detail" class="jumplink"><?php echo $row['device'];?></a></td>
							<td><?php echo $row['count'] ?></td>
							<td><?php echo $row['time'] ?></td>
						</tr>
						<?php } ?>
						
						
					</table>
				</article>
				<!-- Work -->
				<article id="detail" class="panel">
					<header>
						<h2>Detail</h2>
					</header>
					<p>
						Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit.
						Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
						luctus elit eget interdum.
					</p>
					<section>
						<table class="default">
							<tr>
								<th>Position</th>
								<th>People</th>
								<th>Time</th>
							</tr>
						<?php
						$result=mysqli_query($con,"SELECT * FROM records");

						while($row = mysqli_fetch_array($result)) {
						?>
						<tr>
							<td><a href="#detail" class="jumplink"><?php echo $row['device'];?></a></td>
							<td><?php echo $row['count'] ?></td>
							<td><?php echo $row['time'] ?></td>
						</tr>
						<?php } ?>
							



						</table>
					</section>
				</article>
			</div>
			<!-- Footer -->
			<div id="footer">
				<ul class="copyright">
					<li>曾伯維：</li>
					<li>李宜潔：</li>
					<li>邱垂傑：</li>
					<li>郭家政：jienfu926@gmail.com</li>
				</ul>
			</div>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>