
<?php
include('header.html');
echo("<header>hello world</header>");
?>
<form method="POST" action="results.php">
    <input type="text" name="firstName" placeholder="enter your first name">
    <input type="text" name="lastName" placeholder="enter your last name">
    <input type="text" name="address" placeholder="enter your address">
    <input type="submit">
</form>