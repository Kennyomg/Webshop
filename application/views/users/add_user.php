<p><h3><?php echo $header; ?></h3></p>
<table>
	<form action='./add_user' method='post'>
		<tr>
			<td>Voornaam</td>
			<td><input type='text' name='firstname' /></td>
		</tr>
		<tr>
			<td>Tussenvoegsel</td>
			<td><input type='text' name='infix' /></td>
		</tr>
		<tr>
			<td>Achternaam</td>
			<td><input type='text' name='surname' /></td>
		</tr>
		<tr>
			<td>Emailadres</td>
			<td><input type='text' name='emailaddress' /></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td>gebruikersrol</td>
			<td>
				<select name='userrole'>
					<?php echo $userroles; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' /></td>
		</tr>
	</form>
</table>