<?php
include('conexiones/conexionLocalhost.php');

//Evaluamos que el formulario ha sido enviado
if(isset($_POST['sent'])) {

  //Verificamos si existen campos vacios
  foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "El campo $calzon es opbligatorio";
  }

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My San Carlos Vacation, San Carlos Property Rentals - User add</title>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

<link href="css_main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
//-->
</script>
</head>

<body>
<div id="main">

<?php include('includes/header.php'); ?>
<!-- HEADER END -->


<div class="txt_navbar" id="navbar"><strong>You are here:</strong> <a href="index.php">Home</a> &raquo; <a href="user_management.php">User management</a> &raquo; User add
</div>

<div id="content" class="txt_content">
  <?php echo $conexionLocalhost; ?>
  <h2>User add</h2>
  <p>Use the form below to add a new user.</p>

  <form action="user_add.php" method="post">
  	<table>
  		<tr>
  			<td><label for="nombre">First name:</label></td>
  			<td><input type="text" name="nombre" /></td>
  		</tr>
  		<tr>
  			<td><label for="apellidos">Last name:</label></td>
  			<td><input type="text" name="apellidos" /></td>
  		</tr>
  		<tr>
  			<td><label for="email">Email:</label></td>
  			<td><input type="text" name="email" /></td>
  		</tr>
  		<tr>
  			<td><label for="telefono">Telephone:</label></td>
  			<td><input type="text" name="telefono" /></td>
  		</tr>
  		<tr>
  			<td><label for="password">Password:</label></td>
  			<td><input type="password" name="password" /></td>
  		</tr>
  		<tr>
  			<td><label for="role">Role:</label></td>
  			<td>
  				<select name="role" id="role">
  					<option value="agent" selected="selected">Agent</option>
  					<option value="admin">Administrator</option>
  				</select>
  			</td>
  		</tr>
  		<tr>
  			<td>&nbsp;</td>
  			<td><br /><input type="submit" value="Register user" name="sent" /></td>
  		</tr>
  	</table>
  </form>

</div>

<!--CONTENT END -->

<?php include('includes/sidebar.php'); ?>
<!-- SIDEBAR END -->
<div style="clear: both;"></div>
<?php include('includes/footer.php'); ?>

</div>

</body>
</html>
