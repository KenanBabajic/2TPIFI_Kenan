
<?php
function topnav($activePage2) 
{
        ?>

<div class="topnav">
        <a class="<?php if ($activePage == 1) print ("active");
        else print("inactive"); ?>" href="HomeFR.php">Home</a>
        <a class="<?php if ($activePage == 2) print ("active");
        else print("inactive"); ?>" href="AboutFR.php">À propos</a>
        <a class="<?php if ($activePage == 3) print ("active");
        else print("inactive"); ?>" href="ContactFR.php">Contact</a>
        <a class="<?php if ($activePage == 4) print ("active");
        else print("inactive"); ?>" href="ProductsFR.php">Produits</a>
        <a class="<?php if ($activePage == 5) print ("active");
        else print("inactive"); ?>" href="MembersFR.php">Membres</a>
</div>

<?php 
}

?>
