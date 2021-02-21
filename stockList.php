<?php
	include "stockData.php";
	$user_name = "弁財天子";
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
					<div id="header_user" ><?= $user_name ?>様</div>
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
							<option value="0">すべて</option>
							<option value="1">パン生地の材料</option>
							<option value="2">ドライフルーツ</option>
							<option value="3">調味料</option>
							<option value="4">和菓子の材料</option>
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
	foreach($stock_data as $val){
?>
						<tr>
							<td class="num"><?= $val["stock_id"] ?></td>
							<td><?=  $val["stock_name"] ?></td>
							<td class="num"><?=  $val["amount"] ?></td>
							<td>パン生地の材料</td>
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
