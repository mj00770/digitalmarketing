<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="سایت فروش انواع محصولات آرایشی و بهداشتی و زیبایی"/>
<meta name="keywords" content="omorfia ,زیبایی ,بهداشتی ,آرایشی , امورفیا"/>
<script src="js/jsmobile.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />	
<script src="sliderengine/jquery.js"></script>
<script type="text/javascript" src="js/js.js" language="javascript"></script>

<?php 
include_once('class/product.php');
include_once('class/functions.php');
$product = new product();
$res = $product->selectspecial();
?>


<title>فروش های ویژه</title>
</head>

<body>

	<div id="fullpage">
    
    	<?php include_once('template/header.php'); ?>
        
        <?php include_once('template/topmenu.php'); ?>
        
        <div id="otherproducts">
        	<div id="op-title">فروش های ویژه</div>
            <div id="op-contain">
            <?php
				while($row = $res->fetch(PDO::FETCH_ASSOC))
				{
			 ?>
            	<div class="op-product">
                	<div class="op-p-1"><img src="images/slider-3.jpg" /></div>
                    <div class="op-p-2">
                    	<div class="op-p-2-r"><a href="single.php?pid=<?php echo $row['id'];?>">مشاهده جزئیات و خرید</a></div>
                        <div class="op-p-2-l"><?php echo $row['price'] ?> تومان</div>
                    </div>
                </div><!--End of op-product-->
        	<?php
				}
			?>
            </div><!--End of contain-->
        </div><!--End of otherproducts-->
        
		<div id="footer">
        
        	<div id="foo-1">
            	<div id="foo-1-1"><div id="foo-1-1-matn">بازگشت به بالا</div></div>
                <div id="foo-1-2">
                	<div id="foo-1-2-r">تحویل فوری</div>
                    <div id="foo-1-2-c">ضمانت اصل بودن</div>
                    <div id="foo-1-2-l">پرداخت در محل</div>
                </div>
            </div><!--End of foo-1-->
            <?php include_once('template/foo-23.php'); ?>
        
        </div><!--End of fullpage-->	
    </div><!--End of fullpage-->
    
</body>
</html>