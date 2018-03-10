<h2>Connectez vous!</h2>

<?php if(isset($inscErrorText)) 
	echo '<span class="error">' . $inscErrorText . '</span>';
?>
<form action="index.php?action=validateConnexion" method="post"> 
	<table>
		<tr> 
			<th>Login* :</th> 
			<td><input type="text" name="inscLogin"/></td> 
		</tr> 
		<tr> 
			<th>Mot de passe* :</th> 
			<td><input type="password" name="inscPassword"/></td> 
		</tr> 
		<tr> 
			<th /> 
			<td><input type="submit" value="Connexion" /></td> 
		</tr>
	</table> 
</form> 