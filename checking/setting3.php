<?php
include_once('../class/setting3.php');
include_once('../class/functions.php');
$setting3=new setting3();
$func=new functions();

if(isset($_POST['tupdate']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/socila.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['telegram']);
					$res=$setting3->tupdate($picture);
					if($res)
					{
						header("location:../admin/socila.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/socila.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/socila.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/socila.php?err=2022");
				exit;
			}
		}

}
if(isset($_POST['iupdate']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/socila.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['instagram']);
					$res=$setting3->iupdate($picture);
					if($res)
					{
						header("location:../admin/socila.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/socila.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/socila.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/socila.php?err=2022");
				exit;
			}
		}

}
if(isset($_POST['fupdate']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/socila.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['facebook']);
					$res=$setting3->fupdate($picture);
					if($res)
					{
						header("location:../admin/socila.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/socila.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/socila.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/socila.php?err=2022");
				exit;
			}
		}

}
if(isset($_POST['p1update']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/dlogo.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['pic1']);
					$res=$setting3->pic1update($picture);
					if($res)
					{
						header("location:../admin/dlogo.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/dlogo.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/dlogo.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/dlogo.php?err=2022");
				exit;
			}
		}

}
if(isset($_POST['p2update']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/dlogo.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['pic2']);
					$res=$setting3->pic2update($picture);
					if($res)
					{
						header("location:../admin/dlogo.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/dlogo.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/dlogo.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/dlogo.php?err=2022");
				exit;
			}
		}

}
if(isset($_POST['p3update']))
{
	if($_FILES['picture']['error']>0)
		{
			header("location:../admin/dlogo.php?err=2021");
			exit;
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name']))
			{
				$finename = md5($_FILES['picture']['name'].microtime()).substr($_FILES['picture']['name'],-5,5);
				$path="../images/".$finename;
				$picture="images/".$finename;
				$move=move_uploaded_file($_FILES['picture']['tmp_name'],$path);
				if($move)
				{
					$respro1=$setting3->select();
					$rowpro1=$respro1->fetch(PDO::FETCH_ASSOC);
					unlink("../".$rowpro1['pic3']);
					$res=$setting3->pic3update($picture);
					if($res)
					{
						header("location:../admin/dlogo.php?err=2035");
						exit;
					}
					else
					{
						header("location:../admin/dlogo.php?err=2024");
						exit;
					}
				}
				else
				{
					header("location:../admin/dlogo.php?err=2023");
					exit;	
				}
			}
			else
			{
				header("location:../admin/dlogo.php?err=2022");
				exit;
			}
		}

}
?>