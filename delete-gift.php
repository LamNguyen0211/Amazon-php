<?php
session_start();

require_once ('dbhelper.php');
if (!empty($_POST)) {
	$id = $_POST['id'];

	if ($id > 0) {
		execute("delete from gift where id = $id");
	}
}

header('Location: gift.php');