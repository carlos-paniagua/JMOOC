<?php
	session_start();

	include "dbConnect.php";

	//種類の絞り込み
	if(isset($_POST['type_select']))
	{
			$type=$_POST["type_select"];
	}
	else {
			$type = 0;
	}

	$sql  = "SELECT * FROM stockList";
	if($type > 0)
	{
		$sql .= " WHERE type=$type";
	}

	echo $sql;

 	if($result = mysqli_query($conn , $sql) ){

 	}
 	else {
	 	echo mysqli_error($conn)."<BR>";
	 	exit();
 	}

	 if(isset($_SESSION["user"])){
		 $user = $_SESSION["user"];
	 }
	 else{
		 session_destroy();
		 $host = $_SERVER['HTTP_HOST'];
		 $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		 $extra = "index.html";
		 header("Location: http://$host$uri/$extra");
		 exit();
	 }
?>

<!doctype html>
<html>
	<head>
    	<title>在庫管理</title>
		<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="stock.css" >
    </head>
    <body>
			<div id="container">
				<div id="header">
					<img src="images/logo.gif" >
					<div id="header_title" >在庫管理システム</div>
					<div id="header_user" ><?= $user["user_name"] ?>様</div>
				</div>
			  <div id="nav">
					<ul>
						<li>メニュー選択</li>
			      <li><a href="stockList.php">在庫一覧</a></li>
						<li><a href="stockList.php">入庫（仕入れ）</a></li>
						<li><a href="stockList.php">出庫（消費）</a></li>
					</ul>
				</div>
			  <div id="main">
					<div id="main_title">在庫一覧</div>
					<form action="stockList.php" method="post">
						種類の選択：<select name="type_select">
	
	<?php
			if($type == 0){
	?>
										<option value="0" selected>すべて</option>
<?php
			}
			else{
?>
										<option value="0" >すべて</option>
<?php
			}

			if($type == 1){
?>
										<option value="1" selected>パン生地の材料</option>
<?php
			}
			else{
?>
										<option value="1" >パン生地の材料</option>
<?php
			}

			if($type == 2){
?>
										<option value="2" selected>ドライフルーツ</option>
<?php
			}
			else{
?>
										<option value="2" >ドライフルーツ</option>
<?php
			}

			if($type == 3){
?>
										<option value="3" selected>調味料</option>
<?php
			}
			else{
?>
										<option value="3" >調味料</option>
<?php
			}

			if($type == 4){
?>
										<option value="4" selected>和菓子の材料</option>
<?php
			}
			else{
?>
										<option value="4" >和菓子の材料</option>
<?php
			}
?>
							
						</select>
						<input type="submit" value="切り替え">
					</form>
					<table width="100%">
						<tr>
								<th>番号</th>
								<th>材料</th>
								<th>内容量</th>
								<th>種類</th>
								<th>個数</th>
								<th>備考</th>
						</tr>
<?php
	while($val = mysqli_fetch_assoc($result)){
		if($val["type"] == 1){
			$type_s = "パン生地の材料";
		}
		else if($val["type"] == 2){
			$type_s = "ドライフルーツ";
		}
		else if($val["type"] == 3){
			$type_s = "調味料";
		}
		else if($val["type"] == 4){
			$type_s = "和菓子の材料";
		}
?>
						<tr>
							<td class="num"><?= $val["stock_id"] ?></td>
							<td><?=  $val["stock_name"] ?></td>
							<td class="num"><?=  $val["amount"] ?></td>
							<td><?= $type_s ?></td>
							<td class="num"><?=  $val["n"] ?></td>
							<td><?=  $val["remarks"] ?></td>
						</tr>
<?php
}
?>
					</table>
				</div>
			  <div id="footer">
					Copyright © All Rights Reserved by JMOOC
				</div>
			</div>
    </body>
</html>
