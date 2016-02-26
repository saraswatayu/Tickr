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