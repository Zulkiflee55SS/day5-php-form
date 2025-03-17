<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1>แบบฟอร์มลงทะเบียน</h1>

        <form method="POST">
            <label for="name">ชื่อ:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">อีเมล:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">ข้อความ:</label>
            <textarea name="message" id="message" required></textarea>

            <button type="submit">ส่งข้อมูล</button>
        </form>

        <div class="result">
            <h2>ผลลัพธ์:</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $message = htmlspecialchars($_POST["message"]);

                echo "<p><strong>ชื่อ:</strong> $name</p>";
                echo "<p><strong>อีเมล:</strong> $email</p>";
                echo "<p><strong>ข้อความ:</strong> $message</p>";
            }
            ?>
        </div>
    </div>

</body>
</html>
