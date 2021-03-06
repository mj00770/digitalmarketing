<?php
include_once('../class/category.php');
include_once('../class/functions.php');
include_once('../class/brand.php');
$func=new functions();
$category=new category();
$brand=new brand();
if(isset($_GET['cid']))
{
	$cid=$func->get_value($_GET['cid']);
	$category->delete($cid);
	header("location:../admin/category.php?err=4040");
	exit;
}
if(isset($_GET['bid']))
{
	$bid=$func->get_value($_GET['bid']);
	$resbrand=$brand->selectOne($bid);
	$row=$resbrand->fetch(PDO::FETCH_ASSOC);
	unlink("../".$row['picture']);
	$brand->delete($bid);
	header("location:../admin/brand.php?err=4040");
	exit;
}
elseif(isset($_POST['cinsert']))
{
	$title=$func->post_value($_POST['title']);
	$category->insert($title);
	header("location:../admin/category.php?err=5050");
	exit;
}
elseif(isset($_POST['pinsert']))
{
	$title=$func->post_value($_POST['title']);
	$cid = $func->post_value($_POST['category']);
	{
		if($_FILES['picture']['error']>0)
		{
			header("location:../admin/brand.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/img/".$finename;
				$picture="images/img/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$res=$brand->insert($title,$picture,$cid);
					if($res)
					{
						header("location:../admin/brand.php?err=2025");
						exit;
					}
					else
					{
						header("location:../admin/brand.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/brand.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/brand.php?err=2022");
				exit;
			}
		}
	}

}
?>