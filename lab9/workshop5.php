<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>
<form>
</form>
<div style="display:flex">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute(); // เริ่มค ้นหา
    ?>
    <?php while ($row = $stmt->fetch()) : ?>
        <div style="padding: 15px; text-align:center"> 
        <a href="detailno5.php?pid=<?= $row["pid"]?>">
            <img src='product_photo/<?= $row["pid"]?>.jpg' width='100'>
        </a><br>
        <?= $row["pname"] ?><br>
        <?= $row["price"] ?>
        </div>
    <?php endwhile; ?>
</div>
</body></html>