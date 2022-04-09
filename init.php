<?php
require_once ('dbhelper.php');
if (!empty($_POST)) {
	init();

	//create tables
	$sql = 'create table if not exists user (
		id int primary key auto_increment,
		fullname varchar(50) not null,
		email varchar(150),
		password varchar(32)
	)';
	execute($sql);

	$sql = 'create table if not exists gift (
		id int primary key auto_increment,
		title varchar(200),
		thumbnail varchar(500),
		content text,
		price float,
		created_at datetime,
		updated_at datetime,
		user_id int references user (id)
	)';
	execute($sql);
}
?>

<html>
	<head>
		<title>Init page</title>
		<meta charset="utf-8">

		<style type="text/css">
			.main-content {
				width: 640px;
				margin: 0px auto;
			}
		</style>
	</head>
	<body>
		<div class="main-content">
			<h2 style="text-align: center;">Register</h2>
			<form method="post">
				<button type="submit" name="action" value="init" style="width: 100%;">Init Database</button>
			</form>
		</div>
	</body>
</html>