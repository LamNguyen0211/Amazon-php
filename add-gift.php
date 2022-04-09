<?php
session_start();

require_once ('./dbhelper.php');
if (!empty($_POST)) {
	$title      = $_POST['title'];
	$thumbnail  = $_POST['thumbnail'];
	$price      = $_POST['price'];
	$content    = $_POST['content'];
	$updated_at = $created_at = date('Y-m-d H:i:s');
	$id         = $_POST['id'];

	if (!empty($title)) {
		if ($id > 0) {
			$sql = "update gift set title = '$title', thumbnail = '$thumbnail', content = '$content', price = '$price', updated_at = '$updated_at' where id = '$id'";
		} else {
			$sql = "insert into gift (title, content, thumbnail, price, updated_at, created_at) values ('$title', '$content', '$thumbnail', '$price', '$updated_at', '$created_at')";
		}

		execute($sql);

		header("Location: gift.php");
		die();
	}
}

$id    = '';
$title = $thumbnail = $content = $price = '';
if (isset($_GET['id'])) {
	$id   = $_GET['id'];
	$data = executeResult('select * from gift where id = '.$id);
	if (count($data) > 0) {
		$title     = $data[0]['title'];
		$thumbnail = $data[0]['thumbnail'];
		$content   = $data[0]['content'];
		$price     = $data[0]['price'];
	}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Admin</title>
    <script  src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
        
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft">

                </span>Lamnguyen</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li >
                        <a href="index.php" class="active" ><span class="las la-igloo"></span>
                        <span>Dasboard</span></a>
                    </li>
                    <li>
                        <a href="gift.php"><span class="las la-users"></span>
                        <span>Customers</span></a>
                    </li>
                    <li>
                        <a href=""><span class="lab la-product-hunt"></span>
                        <span>Products</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-shopping-bag"></span>
                        <span>Orders</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-receipt"></span>
                        <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="header-tittle">
                    <h2>
                        <label for="nav-toggle">
                            <span class="las la-bars"></span> 
                        </label>
                       Product
                    </h2>
                    <div class="search-wrapper">
                        <span class="las la-search"></span>
                        <input type="search" placeholder="Search here" >
                    </div>
                    <div class="user-wrapper" style="float:right">
                        <nav>
                            <button class="drop-btn" style="background-color: #fff">
                                <span class="fas fa-caret-down" id="imglogin"><img src="img/amazon07_.jpg" width="40px" height="40px" alt=""></span>
                            </button>                         
                            <div class="wrapper" >
                                <ul class="menu-bar sidebar-menu1 hidden">
                                    <li><a href="amazon2.php">
                                        <div class="icon" style="color:#b0b3b8;padding: 10px;border-radius: 5px;line-height: 20px;"><span class="fas fa-home">Home</span></div>
                                    </a></li>
                                    <li><a href="#">
                                        <div class="icon" style="color:#b0b3b8;padding: 10px;border-radius: 5px;line-height: 20px;" ><span class="las la-id-card">Profile<i class="fas fa-angle-right"></i></span></div>
                                    </a></li>
                                    <li><a href="#">
                                        <div class="icon" style="color:#b0b3b8;padding: 10px;border-radius: 5px;line-height: 20px;"><span class="fas fa-cog">Settings<i class="fas fa-angle-right"></i></span></div>
                                    </a></li>
                                    <li><a href="#">
                                        <div class="icon" style="color:#b0b3b8;padding: 10px;border-radius: 5px;line-height: 20px;"><span class="fas fa-user">Activity Log</span></div>
                                    </a></li>
                                    <li><a href="login.php">
                                        <div class="icon" style="color:#b0b3b8;padding: 10px;border-radius: 5px;line-height: 20px;"><span class="las la-sign-out-alt">Logout</span></div>
                                    </a></li>
                                </ul>
                            </div>
                            
                        </nav>
                    </div>
                    
                </div>
            </header>
            <main>
            <div class="cards" style="font-size:50px">
				<h2 style="text-align: center;">Editor</h2>

				<form action="" method="post">
					<a >Title: </a>
					<input style="height:50px; width:800px" type="text" name="title" placeholder="Enter title" required="true" style="width: 100%;" value="<?=$title?>">
					<input type="text" name="id" value="<?=$id?>" hidden>
					<br/><br/>
					<label>Thumbnail: </label>
					<input type="text" name="thumbnail" placeholder="Enter thumbnail" required="true" style="width: 100%;" value="<?=$thumbnail?>">
					<br/><br/>
					<label>Price: </label>
					<input style="height:50px; width:600px" type="number" name="price" placeholder="Enter price" required="true" style="width: 100%;" value="<?=$price?>">
					<br/><br/>
					<label>Content: </label>
					<textarea style="height:400px; width:500px" name="content" placeholder="Enter content" required="true" rows="5" style="width: 100%;"><?=$content?></textarea>
					<br/><br/>
					<button style= "height: 40px;background: #3970b0;color: #fff;font-style:bold;font-size: 20px;width:100px"type="submit">Save</button>
				</form>
			</div>
			
		</div>
	</body>
    <script>
        $(document).on("click","#imgLogin",function() {
    if($(".menu-bar.sidebar-menu1").hasClass("hidden")){
     $(".menu-bar.sidebar-menu1").removeClass("hidden");
    }else{
     $(".menu-bar.sidebar-menu1").addClass("hidden");
    };
 });
    </script>
</html>
