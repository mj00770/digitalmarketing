<?php
include_once('onload.php');
include_once('../class/modares.php');

$modares = new modares();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>افزودن مدرس</title>
<link type="text/css" rel="stylesheet" href="style.css">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.flot.js"></script>
<script type="text/javascript" src="doc.js"></script>
<script type="text/javascript" src="js.js"></script>
<script src="../ckeditor/ckeditor.js"></script>

</head>
<body>

	<div class="body_style">

        <div class="menu">
        <a href="#" class="logo"></a>
        </div>
        <?php include_once("template/rightmenu.php");?>
        <div class="content">
            <?php include_once("template/topmenu.php");?>
            <h2>افزودن مدرس</h2>
            <div id="content-body">
            <?php
			@$err=$_GET['err'];
			if($err == 2020)
			{
				echo "<center><p class='registererr' style='color:#ff0000;'>پرکردن تمامی فیلدهای ستاره دار الزامی است</center></p><br />";
			}
			elseif($err==2025)
			{
				echo "<center><p style='color:green;' >مدرس با موفقیت ایجاد شد.</center></p><br />";
			}
			?>
            	<form method="post" action="../checking/modaresinsert.php" enctype="multipart/form-data">
                	<table cellpadding="5" cellspacing="2">
                        <tr>
                        	<td colspan="2"><span style="color:#FF0000; font-size:30px;">*</span><input type="text" name="name" placeholder="نام مدرس..." id="ptitle"></td>
                        </tr>
						<tr>
                        	<td colspan="2"><span style="color:#000; font-size:20px;">بیوگرافی مدرس</td>
                        </tr>
                        <tr>
                            <td colspan="2"><span style="color:#FF0000; font-size:30px;"></span><textarea class="cke_rtl" placeholder="بیوگرافی مدرس..." name="bio" id="editor1"></textarea></td>
                        </tr>				
                        <tr>
                            <td colspan="2"><span style="color:#FF0000; font-size:30px;">*</span>آپلود عکس : <input type="file" name="picture" />سایز عکس فرقی نمی کند ولی بهترین سایز عرض 300 و طول 250 است.</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="insert" value="افزودن" id="pinsert" /></td>
                        </tr>
                    </table>
                </form>
            </div><!--ٍEnd of content-body-->
    	</div>
	</div><!--ٍEnd of body_style-->
	<script>
	CKEDITOR.replace( 'editor1', {
    language: 'fa',
    uiColor: '#9AB8F3'
	});

	</script>
</body>
</html>
