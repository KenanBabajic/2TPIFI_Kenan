<?php

function NavBar($activePage) {

  ?>

<div class="topnav">
  <a class="<?php if ($activePage == 1) print("activePage");?> navlink href="<?php if ($activePage == 1) print (""); else print("Home.php")?>">Home</a>
  <a class="<?php if ($activePage == 2) print("activePage");?> navlink href="<?php if ($activePage == 1) print ("About.php"); else print("About.php")?>">About</a>
  <a class="<?php if ($activePage == 3) print("activePage");?> navlink href="<?php if ($activePage == 1) print ("Contact.php"); else print("Contact.php")?>">Contact</a>
  <a class="<?php if ($activePage == 4) print("activePage");?> navlink href="<?php if ($activePage == 1) print ("Products.php"); else print("Products.php")?>">Products</a>
  <a class="<?php if ($activePage == 5) print("activePage");?> navlink href="<?php if ($activePage == 1) print ("Members.php"); else print("Members.php")?>">Members</a>
      </div>
      <?php
    
}  
?>
