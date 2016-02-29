<?php

function signIn() { ?>
	<script type="text/javascript">
		window.location = "tickr/dashboard.php";
	</script>  
<?php 
}

if(isset($_POST['submit']))
{
	signIn();
}

?>

/*

 //Redirect if condition is satisfied
 <?php
 if($_POST['username'] == $username && $_POST['password'] == $password)
 
 header( 'Location: mainpage.php' );
 ?>
 

*/