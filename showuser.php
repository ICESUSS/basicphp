<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

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
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
li a:hover:not(.active) {
  background-color: #ff6347; /* สีแดงเมื่อเม้าส์ชี้ */
}
body {

font-family: Arial, sans-serif; /* ฟอนต์หลัก */
}


.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="showuser.php">All user</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right">

    <a class="active" href="logout.php">Logout</a>
    
  </li>
  
</ul>

<h1>รายชื่อ ทั้งหมด</h1>


<table id="customers">
  <tr>
    <th>#</th>
    <th>Username</th>
    <th>ชื่อ-นามสกุล</th>
    <th>Email</th>
    <th>เบอร์โทรศัพท์</th>
    <th>Action</th>
  </tr>
  <?php
    $sql = 'SELECT * FROM tb_user';
    $query = $conn->query($sql);
    $i=0;
    while ($fet_user = $query->fetch_object()) {
        $i++;
    
?>
 <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $fet_user->username; ?></td>
    <td><?php echo $fet_user->fullname; ?></td>
    <td><?php echo $fet_user->email; ?></td>
    <td><?php echo $fet_user->tel; ?></td>
    <td></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>