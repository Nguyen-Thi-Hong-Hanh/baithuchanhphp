<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chào các bạn</title>
	</head>

	<body>
		<?php 
			if (isset($_POST["ten"]))    // kiểm tra xem có tồn tại giá trị tên hay không
			{
				$ten=$_POST["ten"];
				$xuat_ten="Chào bạn ".$ten;		// chuỗi đc nối vs biến tên qua dấu .
			}
		?>
		<form action="1.php" method="post" >
			<table width="271" border="1">
				<tr>
					<td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
				</tr>
				<tr>
					<td width="91">Họ tên bạn</td>
					<td width="164">
						<input type="text" name="ten" id="chao3" value="<?php if (isset($_POST["ten"])) echo $_POST["ten"];?> "/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label>
							<label><?php if (isset($xuat_ten)) echo $xuat_ten; ?></label>
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>
