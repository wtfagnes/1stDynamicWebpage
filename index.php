<?php
session_start();

if(!isset($_SESSION['user'])){
    die("Login first!");
}
?>

<style>
body {font-family: Arial; background: linear-gradient(120deg,#84fab0,#8fd3f4); text-align:center;}
.box {background:white; padding:30px; margin:100px auto; width:300px; border-radius:10px;}
button {padding:10px; background:red; color:white; border:none;}
</style>

<div class="box">
<h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>

<form action="logout.php" method="POST">
<button>Logout</button>
</form>
</div>