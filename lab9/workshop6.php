<?php include "connect.php" ?>
<html>
    <head>
        <meta charset="utf-8">
        <script>
            function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช้คลิกที่ link ลบ
            var ans = confirm("ต้องการลบ username นี้? " + username ); // แสดงกล่องถามผู้ใช ้
            if (ans==true) // ถ้าผู้ใช้กด OK จะเข้าเงื่อนไขนี้
            document.location = "deleteno6.php?username=" + username // ส่งไป deleteon6.php
            }
        </script>
    </head>
        <body>
            <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                echo "username : " . $row["username"] . "<br>";
                echo "ชื่อสมาชิก : " . $row["name"] . "<br>";
                echo "ที่อยู่ : " . $row["address"] . "<br>";
                echo "อีเมล์ : " . $row["email"] . "<br>";
                echo "<a href='inputform.php?username=" . $row["username"] . "'>แก้ไข</a> | ";
                //echo "<a href='#' onclick='confirmDelete(" . $row["username"] . ")'>ลบ</a>";
                echo "<a href='#' onclick='confirmDelete(\"" . $row["username"] . "\")'>ลบ</a>";
                echo "<hr>\n";
            }
            ?>
        </body>
</html>