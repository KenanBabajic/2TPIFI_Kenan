<?php
function topnav($activePage) 
{
        ?>

<div class="topnav">
        <a class="<?php if ($activePage == 1) print ("active");
        else print("inactive"); ?>" href="Home.php">Home</a>
        <a class="<?php if ($activePage == 2) print ("active");
        else print("inactive"); ?>" href="About.php">About</a>
        <a class="<?php if ($activePage == 3) print ("active");
        else print("inactive"); ?>" href="Contact.php">Contact</a>
        <a class="<?php if ($activePage == 4) print ("active");
        else print("inactive"); ?>" href="products2.php">Products</a>
        <a class="<?php if ($activePage == 5) print ("active");
        else print("inactive"); ?>" href="Members.php">Members</a>
</div>

<?php 
}

?>