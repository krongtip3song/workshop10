
<?php
    /**
 * Created by PhpStorm.
 * User: Oak
 * Date: 7/2/2560
 * Time: 13:25
 */
    //session_start();
    include ("../controller/connection.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Header</title>
</head>
<body>
<style>
    body{top:0; margin:0; padding:0;}
    a{text-decoration:none;
    color: white;}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                if (isset($_SESSION['Admin'])){
                    echo "<a class=\"navbar-brand\" href=\"admin_page.php\">Gamming Gear Shop</a>";
                }else{
                    echo "<a class=\"navbar-brand\" href=\"products.php\">Gamming Gear Shop</a>";
                }
            ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav">
               <!-- <li class="active"><a href="../view/products.php">Products</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                       <li><a href="#">Page 1-1</a></li>
                       <li><a href="#">Page 1-2</a></li>
                       <li><a href="#">Page 1-3</a></li>
                   </ul>
               </li>
               <li><a href="#">sd</a></li> -->
               <?php
                    if(isset($_SESSION['User'])){
                        echo "<li><a href=\"user_page.php\">ข้อมูลส่วนตัว</a></li>";
                    }
               ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../controller/logout.php" id="logout" name="<?php $_GET['logout']; ?>"><span class="glyphicon glyphicon-log-in"></span>  ออกจากระบบ</a></li>
            </ul>

        </div>
    </div>
</nav>
</body>
</html>
