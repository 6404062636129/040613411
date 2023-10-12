<?php include "connect.php" ?>
<?php session_start(); 
if(!isset($_SESSION['username'])){
    header("location:login-form.php"); //ถ้าเข้าแบบ pathname จะเด้งไปหน้า login.php
}else{

	//echo $_SESSION["username"];


	?>
	<html>
	<body>
		<?php
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
		}	
		?>
		<p id="u">
		<li><a href="cart.php?action=">สินค้าในตะกร้า (<?=sizeof($_SESSION['cart'])?>)</a></li>
		<li><a href="logout.php">ออกจากระบบ</a></li>

		</p>
		<script>
			window.onload = function add() {
				var id = <?=$_SESSION["username"]?>;
				var u = document.getElementById("u");
				var li = document.createElement("li");
				var a = document.createElement("a");

				a.href = 'admindetail.php'; // กำหนด href สำหรับลิงก์
				a.textContent = 'adminpage'; // กำหนดข้อความของลิงก์

				li.appendChild(a); // เพิ่มอีลิเมนต์ <a> เข้าไปใน <li>

				if (id === 123) {
					u.appendChild(li); // เพิ่ม <li> เข้าไปใน <ul>
				}
			}
    </script>
		<div style="display:flex">	
		<?php
			$stmt = $pdo->prepare("SELECT * FROM product");
			$stmt->execute();
			while ($row = $stmt->fetch()) { 
		?>
			<div style="padding: 15px; text-align: center">
				<a href="detail.php?pid=<?=$row["pid"]?>">
					<img src='img/<?=$row["pid"]?>.jpg' width='100'></a><br>
				<?=$row ["pname"]?><br><?=$row ["price"]?> บาท<br>	
				<form method="post" action="cart.php?action=add&pid=<?=$row["pid"]?>&pname=<?=$row["pname"]?>&price=<?=$row["price"]?>">
					<input type="number" name="qty" value="1" min="1" max="9">
					<input type="submit" value="ซื้อ">	   
				</form>
			</div>
		<?php } ?>
		</div>
	</body>
	</html>

<?php } ?>