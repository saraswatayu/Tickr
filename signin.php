<?php

function signIn() { ?>
	<script type="text/javascript">
		window.location = "./tickr.html";
	</script>  
<?php 
}

if(isset($_POST['submit']))
{
	signIn();
}

?>