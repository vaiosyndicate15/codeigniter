<!DOCTYPE html>
<html>
	<head>
		<title>GAWE CRUD</title>
	</head>
	<body>
		<center><h1>LOGIN</h1></center>
		<form action="<?php echo base_url().'index.php/auth/masuklogin' ?>" method="post">
			<div id="form-login">
				Administrator Page - Plase Login First
				<br><br>

				<table border="0" cellpadding="4">

					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan"> <?php echo form_error('username');?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>"> <?php echo form_error('password');?></td>
					</tr>
					<tr>
						<td>Level</td>
						<td>:</td>
						<td><select name="level" class="inputan">
							<option value="1">Dinas Kesehatan</option>
							<option value="2">Puskesmas</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="login" value="Login"> </td>
					</tr>
				</table>
			</div>
		</form>	
	</body>
</html>