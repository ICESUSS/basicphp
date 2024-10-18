<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวสด</title>
    <style>
        /* สไตล์พื้นฐานของเมนู */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        li a:hover:not(.active) {
            background-color: #ff6347;
        }

        .active {
            background-color: #04AA6D;
           
        }
       
        /* สไตล์สำหรับหัวข้อข่าว */
        h1 {
            color: #000000;
            font-family: 'Arial Black', sans-serif;
            margin-top: 50px;
            animation: color-change 3s infinite;
            text-align: center;
            font-size: 36px;
        }

        @keyframes color-change {
            0% { color: #ff4500; }
            50% { color: #ffa500; }
            100% { color: #ff4500; }
        }

        /* สไตล์สำหรับพื้นหลัง */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f9f9f9;
            padding: 20px;
        }

        img {
            width: 20%; /* ปรับขนาดให้กว้างขึ้น */
            height: auto; /* รักษาอัตราส่วน */
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* สไตล์สำหรับข้อความที่มีกรอบ */
        .content-box {
            border: 2px solid #000000; 
            border-radius: 10px; /* มุมโค้ง */
            padding: 20px; /* ระยะห่างภายใน */
            background-color: white; /* สีพื้นหลังของกรอบ */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* เงาให้กับกรอบ */
            max-width: 800px; /* กำหนดความกว้างสูงสุด */
            text-align: center; /* จัดกลางข้อความ */
            margin: 20px; /* เพิ่มระยะห่างรอบกรอบ */
        }

        p {
            font-size: 24px;
            color: #555;
            margin: 10px 0;
        }

    </style>
</head>
<body>

<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="showuser.php">All user</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="Movie.html">Movie</a></li>
    
    <li style="float:right">
      
    <li><a href="logout.php">Logout</a></li>
    
</ul>

<h1>ข่าวสด!!!!</h1>

<div class="content-box">
    <strong style="font-size: 28px;">หนุ่มจับหมามา ขมขื่น!!!</strong> <br>
    <p>นาย ธนาคิด สุวรรณศรี ผู้ต้องหาคดีข่มขืนสุนัข ตอนนี้ลอยนวลอยู่คาดว่า หนีเข้า กรุงเทพฯ ทางเจ้าหน้าที่ กำลังติดตามจับกุมตัวมารับโทษ</p>
    <p>อ่านข่าวเพิ่มเติม...</p>
</div>

<img src="images/462534405_1085228146606784_6439062421794289292_n.jpg" alt="Top">
<p>fhdgiudfsjr</p>

</body>
</html>
