<?php
    require_once('dbhelper.php')
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
                        Dasboard
                    </h2>
                    <div class="search-wrapper">
                        <span class="las la-search"></span>
                        <input type="search" placeholder="Search here" >
                    </div>
                    <div class="user-wrapper" style="float:right">
                        <nav>
                            <button class="drop-btn" style="background-color: #fff">
                                <span class="fas fa-caret-down" id="imgLogin"><img src="img/amazon07_.jpg" width="40px" height="40px" alt=""></span>
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
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>79</h1>
                            <span>Products</span>
                        </div>
                        <div>
                            <span class="las la-clipboard"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>124</h1>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>$6k</h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>
                    
                </div>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Orders</h3>
                                <button>See all <span class="las la-arrow-right"></span></button> 
                            </div>
                            <div class="card-body">
                                <div class="table-reponsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Product Tittle</td>
                                                <td>Customer</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Gaming product</td>
                                                <td>Lewis S. Cunningham</td>
                                                <td>
                                                    <span class="status purple" style="background:greenyellow"></span>
                                                    on sale
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clothes</td>
                                                <td>Lewis S. Cunningham</td>
                                                <td>
                                                    <span class="status pink " style="background: greenyellow"></span>
                                                    on sale
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Another product</td>
                                                <td>Lewis S. Cunningham</td>
                                                <td>
                                                    <span class="status orange" style="background: greenyellow"></span>
                                                    on sale
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
     
                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>New customer</h3>
                                <button>See all <span class="las la-arrow-right"></span></button> 
                            </div>
                            <div class="card-body">
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer"> 
                                    <div class="info">
                                        <img src="img/amazon07_.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lewis S. Cunningham</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </input>
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