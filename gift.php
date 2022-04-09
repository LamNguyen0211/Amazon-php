<?php
session_start();

require_once ('dbhelper.php');
$sql  = "select * from gift";
$data = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Admin</title>
    <script  src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    </head>
	<style>
		@import url('https//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
:root{
    --main-color:#1D2231;
    --color-dark:#1D2231;
    --text-grey:#8390A2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
} 
.sidebar{
    width: 345px;
    position: fixed;
    height: 100%;
    background: var(--main-color);
    left: 0;
    top: 0;
    z-index: 100;
}
.sidebar-brand{
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff;
}
.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu li{
    width: 100%;
    margin-bottom: 1.7rem;
    padding-left: 1rem; 
}
.sidebar-menu a{
    display: block;
    color: #fff;
    font-size: 1.1rem;
    padding-left: 1rem;
}

.sidebar-menu a:hover{
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;

}
.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;
}

.main-content{
    margin-left: 345px;
}
.header-tittle { 
    display: flex;
    justify-content: space-between;
    padding: 1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 345px;
    width: calc(100% - 345px);
    top: 0;
    z-index: 100;
}

.header-tittle h2{
    color:#222;
}
.header-tittle label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}
.search-wrapper{
    border:1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
}
.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}
.search-wrapper input{
    height: 100%;
    padding: .5rem;
    border: none;
    outline: none;

}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 1rem;
}

.user-wrapper small{
    display: inline-block;
    color: var(--text-grey);
}
main{
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}
.cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}
.card-single{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 2px;
}
.card-single div:last-child span{
    color: var(--main-color);
    font-size: 3rem;
}
.card-single div:first-child span{
    color: var(--text-grey);
}
.card-single:last-child{
    background: var(--main-color);
}
.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span{
    color:#fff;
}
.recent-grid{
    margin-top: 3.5rem;
    display: grid;
    grid-template-columns: 65% auto;
    grid-gap:2rem;
}

.card{
    background:#fff;
    border-radius: 5px;
}
.card-header,
.card-body{
    padding: 1rem;
}
.card-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}
.card-header button{
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(main);
}



thead tr{
    border-top: 1px solid #f0f0f0;
    border-bottom: 2px solid #f0f0f0;
}
thead td{
    font-weight: 700;
}
td{
    padding: .5rem 1rem;
    font-size: .9rem;
    color: #222;
   
}
td .status {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 1rem;
}
tr td:last-child{
    /* display: flex; */
    align-items: center;
}

/* .status .purple{
    background: rebeccapurple;
}
.status .pink{
    background: deeppink;
}
.status .sorange{
    background: orangered;
} */
.table-reponsive{
    width: 100%;
    overflow-x: auto;
}
.customer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem 2rem;
}

.info{
    display: flex;
    align-items: center;
    
}
.info img{
    border-radius: 50%;
    margin-right: 1rem;
}
.info h4{
    font-size: .8rem;
    font-weight: 700;
    color: #222;
}

.info small{
    font-weight: 600;
    color: var(--text-grey);
}

.contact span{
    font-size: 1.2rem;
    display: inline-block;
    color: var(--main-color);
}
nav{
    position: absolute;
    left: 86%;
    transform: (-50%, -50%);
}
.wrapper{
    position: absolute;
    display: flex;
    width: 200px;
    background: #242526;
    border-radius: 5px;
}
nav.drop-btn{
    width: 200px;
    background: #242526;
    color:#b0b3b8;
    line-height: 50px;
    padding: 0 20px;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
}
nav.drop-btn span{
    line-height: 50;
    font-style: 28px;
    cursor: pointer;
}
nav .wrapper ul{
    width: 200px;
    padding: 10px;
}
nav.wrapper ul li{
    line-height: 55px;
}
nav.wrapper ul li a{
    text-decoration: none;
    color: #b0b3b8;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    padding: 0 10px;
    align-items: center;
    border-radius: 8px;
}
nav .wrapper ul li a:hover{
    background: #3a3b3c;
}
.wrapper ul li a i{
    position: absolute;
    right: 10px;
    font-size: 25px;
    pointer-events: none;
}
.sidebar-menu1 a{
    display: block;
    color: #fff;
    font-size: 1.1rem;
    padding-left: 1rem;
}

.sidebar-menu1 a:hover{
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;

}
.hidden{
    display: none;
}


	</style>
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
        <div class="cards" >
		<div class="main-content" style="width:1000px;line-height:70px">
			<h2 style="text-align: center;">Product</h2>
			<a href="add-gift.php"><button style="height: 40px;background: #3970b0;color: #fff;font-style:bold;font-size: 20px;">Add a new product</button></a>
			<table border="1" cellspacing="1" cellpadding="3" style="width: 100%; margin-top: 20px;">
				<thead style="" >
					<tr >
						<th >No</th>
						<th >Thumbnail</th>
						<th>Title</th>
						<th>Price</th>
                        <th>Content</th>
						<th>Updated At</th>
						
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php

$count = 0;
foreach ($data as $item) {
	echo '<tr>
				<td>'.(++$count).'</td>
				<td><img src="'.$item['thumbnail'].'" style="width: 120px;"/></td>
				<td>'.$item['title'].'</td>
				<td>'.$item['price'].'</td>
                <td>'.$item['content'].'</td>
				<td>'.$item['updated_at'].'</td>
				<td><a href="add-gift.php?id='.$item['id'].'"><button style="background:#3970b0;height:50px;width:100px">Edit</button></a></td>
				<td>
					<form action="delete-gift.php" method="post" onsubmit="return deleteItem();">
						<input type="text" name="id" value="'.$item['id'].'" hidden/>
						<button style="background:#3970b0;height:50px;width:100px">Remove</button>
					</form>
				</td>
			</tr>';
}?>
				</tbody>
			</table>
		</div>
		</div>
<script type="text/javascript">
	function deleteItem() {
		option = confirm('Are you sure to delete this item?')
		if(!option) return false
		return true
	}

	// function deleteItem(id) {
	// 	option = confirm('Are you sure to delete this item?')
	// 	if(!option) return

	// 	$.post('delete-gift.php', {
	// 		'id': id
	// 	}, function(data) {
	// 		location.reload()
	// 	})
	// }
    $(document).on("click","#imgLogin",function() {
    if($(".menu-bar.sidebar-menu1").hasClass("hidden")){    
     $(".menu-bar.sidebar-menu1").removeClass("hidden");
    }else{
     $(".menu-bar.sidebar-menu1").addClass("hidden");
    };
 });
</script>
	</main>
</html>