<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - ภาณุวัฒน์ พรมวงษา</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* สีพื้นหลังที่นุ่มนวลขึ้น */
            color: #333;
            scroll-behavior: smooth; /* เพิ่มการเลื่อนหน้าแบบนุ่มนวล */
        }
        header {
            background: linear-gradient(90deg, #04AA6D, #3B99D4); /* เพิ่มการไล่เฉดสี */
            color: white;
            padding: 20px;
            text-align: center;
            position: relative; /* สำหรับใส่ลูกเล่นเพิ่มเติม */
            overflow: hidden;
        }
        header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            transition: transform 1s ease;
        }
        header:hover::after {
            transform: translateX(100%);
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 2px; /* เพิ่มการเว้นระยะระหว่างตัวอักษร */
        }
        h2 {
            color: #4CAF50;
            transition: color 0.3s ease; /* ทำให้การเปลี่ยนสีเป็นไปอย่างนุ่มนวล */
        }
        h2:hover {
            color: #3B99D4; /* เปลี่ยนสีเมื่อ hover */
        }
        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px; /* ทำให้กล่องมีมุมโค้งมน */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        section:hover {
            transform: scale(1.02); /* ทำให้กล่องขยายเล็กน้อยเมื่อ hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* เพิ่มเงา */
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        p {
            line-height: 1.6;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #04AA6D, #3B99D4); /* กำหนดพื้นหลังที่เป็นกราเดียนต์ */
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        footer:hover {
            background: linear-gradient(90deg, #3B99D4, #04AA6D); /* เปลี่ยนสีเมื่อ hover */
        }
        .profile-picture {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact</h1>
    </header>

    <section>
        <img src="images/442466854_968403927946560_5157129533476947339_n - Copy.jpg" alt="Profile Picture" class="profile-picture">
        <h2>นาย ภาณุวัฒน์ พรมวงษา</h2>
        <p>
            <li>เกิดวันที่ 9 กุมภาพันธ์ พ.ศ.2549</li> <br><li> อายุ 18 ปี</li> <br> <li>ที่อยู่ ต.หัวโพธิ์ อ.สองพี่น้อง จ.สุพรรณบุรี 72110</li>

        </p>
    </section>

    <section>
        <h2 >ประวัติการศึกษาและประสบการณ์ทำงาน</h2>
        
        <ul>
            <li>ปัจจุบันศึกษา <strong>วิทยาลัย เทคนิคสุพรรณบุรี</strong> สาขา <strong>เทคโนโลยีสารสนเทศ</strong></li>
            <li>สถานะ กำลังศึกษา</li>
        </ul>
    </section>

    <section>
        <h2>ทักษะที่เชี่ยวชาญ</h2>
        <ul>
            <li>PHP, HTML, CSS, JavaScript python Nextjs</li>
            <li>การพัฒนาระบบเว็บแอปพลิเคชัน</li>
            <li>การออกแบบฐานข้อมูล</li>
        </ul>
    </section>

    <section>
        <h2>ช่องทางติดต่อ</h2>
        <p>
            Facebook : Phanuwat Promwongsa <br>
            Email : phanuwatphromwongsa@gmail.com <br>
            Instgream : phanuwat_phromwongsa
        </p>
    </section>

    <footer>
        <h3>© 2024 Phanuwat - <a class="active" href="index.php">Home</a></h3>
    </footer>
    
</body>
</html>
