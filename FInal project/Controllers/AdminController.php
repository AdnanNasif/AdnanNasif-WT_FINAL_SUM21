<?php
	include 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$nid="";
	$err_nid="";
	$num="";
	$err_num="";
	
	$err_db="";
	
	$hasError=false;
	
	//pass
	function validPass($password)
	 {
		 $hasUpper=false;
		 $hasLower=false;
		 $hasNum=false;
		 $hasQM=false;
		 $hasHash=false;
		
		for($i=0; $i<strlen($password);$i++)
	     {
			 if(ctype_upper($password[$i]))
			 {
				 $hasUpper=true;
			 }
			 
			 if(ctype_lower($password[$i]))
			 {
				 $hasLower=true;
			 }
			 if($password[$i] >='0' && $password[$i]<='9')
			 {
                 $hasNum=true;
                
             }
			 
		     if($password[$i]=='#')
			 {
                 $hasHash=true;
                
             }
              if($password[$i]=='?')
			  {
                  $hasQM=true;
                
                }
                
                if($hasUpper && $hasLower && $hasHash || $hasQM && $hasNum)
				{
                    return true;
                }
            
            }
            return false;
            
            
            
        }
	
		
	if(isset($_POST["sign_up"])){
		
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(strlen($_POST["uname"])<6)
		{
			$err_uname="Username Must be 6 Characters Long";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 //
			 
		   //nid
		   
		   if(empty($_POST["nid"]))
		   {
			 $err_nid="NID Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["nid"]))
		   {
			 $err_nid="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["nid"])<10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["nid"])>10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		   else
		   {
			 $nid=$_POST["nid"];
		   }
		   //num
		    if(empty($_POST["num"]))
		   {
			 $err_num="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["num"])<11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["num"])>11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
			
		   else
		   {
			 $num=$_POST["num"];
		   }
			
			
		if(!$hasError){
			$rs = insertUser($name,$uname,$pass,$nid,$num);
			if($rs === true){
				header("Location: login_bo.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["btn_login"])){
		
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError  = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: dashboard.php");
			}
			$err_db  = "Username and password invalid";
		}
		
	}
	//add owner
	if(isset($_POST["add_donar"]))
	{
		
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 //
			 
		   //nid
		   
		   if(empty($_POST["nid"]))
		   {
			 $err_nid="NID Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["nid"]))
		   {
			 $err_nid="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["nid"])<10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["nid"])>10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		   else
		   {
			 $nid=$_POST["nid"];
		   }
		   //num
		    if(empty($_POST["num"]))
		   {
			 $err_num="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["num"])<11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["num"])>11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
			
		   else
		   {
			 $num=$_POST["num"];
		   }
			
			
	
			$rs = insertUser($name,$pass,$nid,$num);
			if($rs === true){
				header("Location:alldonar.php");
			}
			$err_db = $rs;
		
	}
	
	else if (isset($_POST["edit_donar"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 
			 
		   //nid
		   
		   if(empty($_POST["nid"]))
		   {
			 $err_nid="NID Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["nid"]))
		   {
			 $err_nid="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["nid"])<10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["nid"])>10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		   else
		   {
			 $nid=$_POST["nid"];
		   }
		   //num
		    if(empty($_POST["num"]))
		   {
			 $err_num="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["num"])<11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["num"])>11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
			
		   else
		   {
			 $num=$_POST["num"];
		   }
			

			
			
		$rs =  updateDonar($_POST["name"],$_POST["pass"],$_POST["nid"],$_POST["num"],$_POST["id"]);
		if($rs === true){
			header("Location: alldonar.php");
		}
		$err_db = $rs;
	}
	
	
	function insertUser($name,$pass,$nid,$num){
		$query = "insert into donarr values (NULL,'$name','$pass','$nid','$num')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from donarr where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
	function getAllDonars(){
		$query = "select * from donarr order by name asc";
		$rs = get($query);
		return $rs;
	}
	function getDonar($id){
		$query="select * from donarr where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	function updateDonar($name,$pass,$nid,$num,$id)
	{
		$query="update donarr set name='$name',password='$pass',nid='$nid',num='$num' where id= '$id'";
		return execute($query);
		
		
	}
	
	
?>