<?php
$language = "EN";
if (isset($_GET["lang"])) {
        $language = $_GET["lang"];
}

/*$ArrayOfStrings = [];
$fileHandle = fopen("Translations.csv", "r");
while (!feof($fileHandle)) {
        $OneLine = fgets($fileHandle);
        $ArrayOfExplodedStrings = explode(";", $OneLine);
        if (count($ArrayOfExplodedStrings) == 3) {
                $ArrayOfStrings[$ArrayOfExplodedStrings[0]] = $language == "EN" ? $ArrayOfExplodedStrings[1] : $ArrayOfExplodedStrings[2];
        }
}
*/
function topnav($activePage, $language)
{
        // global $languge; //bad option !!

        ?>

        <div class="topnav">
                <a class="<?php if ($activePage == 1)
                        print("active");
                else
                        print("inactive"); ?>" href="Home.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Home";
                        else
                                print "Accueil"; ?>
                </a>
                <a class="<?php if ($activePage == 2)
                        print("active");
                else
                        print("inactive"); ?>" href="About.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "About";
                        else
                                print "A propos"; ?>
                </a>
                <a class="<?php if ($activePage == 3)
                        print("active");
                else
                        print("inactive"); ?>" href="Contact.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Contact";
                        else
                                print "Contact"; ?>
                </a>
                <a class="<?php if ($activePage == 4)
                        print("active");
                else
                        print("inactive"); ?>" href="Products.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Products";
                        else
                                print "Produits"; ?>
                </a>
                <a class="<?php if ($activePage == 5)
                        print("active");
                else
                        print("inactive"); ?>" href="Login.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Login";
                        else
                                print "Connexion"; ?>
                </a>
                <?php
                        ?>
                <a class="<?php if ($activePage == 6)
                        print("active");
                else
                        print("inactive"); ?>" href="AddProducts.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Products Management";
                        else
                                print "Management de produits"; ?>
                </a>
                <?php

        ?>

                <?php
                if ($language == "EN") {
                        ?>
                        <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=FR">Francais</a>
                        <?php
                } else {
                        ?>
                        <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=EN">English</a>
                        <?php
                }
                ?>

        </div>

        <?php


}

    //Goal 1: Connect to the database
        $connection = new mysqli("localhost", "root", "", "Websitedatabase"); //Connect the Query


//Goal 2: select data from the database table and display it
    $sqlQuery = $connection->prepare("SELECT * FROM Translations"); //Creat a Query
    if (!$sqlQuery)
        die("SQL Error: " . $connection->error); //Check for Errors (if any)
    $sqlQuery->execute(); //Execute the Query
    $result = $sqlQuery->get_result(); //Get the Result
    while ($row = $result->fetch_assoc()) {
            if ($language =="EN")
            {
                $ArrayOfStrings[$row["StringName"]] = $row["DescriptionEN"];
            }
            else
            {
                $ArrayOfStrings[$row["StringName"]] = $row["DescriptionFR"];
            }            
    }


/*
$language = "EN";
if (isset($_GET["lang"])) {
        $language = $_GET["lang"];
}

$ArrayOfStrings = [];
$fileHandle = fopen("Translations.csv", "r");
while (!feof($fileHandle)) {
        $OneLine = fgets($fileHandle);
        $ArrayOfExplodedStrings = explode(";", $OneLine);
        if (count($ArrayOfExplodedStrings) == 3) {
                $ArrayOfStrings[$ArrayOfExplodedStrings[0]] = $language == "EN" ? $ArrayOfExplodedStrings[1] : $ArrayOfExplodedStrings[2];
        }
}
function topnav($activePage, $language)
{
        // global $languge; //bad option !!

        ?>

        <div class="topnav">
                <a class="<?php if ($activePage == 1)
                        print("active");
                else
                        print("inactive"); ?>" href="Home.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Home";
                        else
                                print "Accueil"; ?>
                </a>
                <a class="<?php if ($activePage == 2)
                        print("active");
                else
                        print("inactive"); ?>" href="About.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "About";
                        else
                                print "A propos"; ?>
                </a>
                <a class="<?php if ($activePage == 3)
                        print("active");
                else
                        print("inactive"); ?>" href="Contact.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Contact";
                        else
                                print "Contact"; ?>
                </a>
                <a class="<?php if ($activePage == 4)
                        print("active");
                else
                        print("inactive"); ?>" href="Products.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Products";
                        else
                                print "Produits"; ?>
                </a>
                <a class="<?php if ($activePage == 5)
                        print("active");
                else
                        print("inactive"); ?>" href="Login.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Login";
                        else
                                print "Connexion"; ?>
                </a>
                <a class="<?php if ($activePage == 6)
                        print("active");
                else
                        print("inactive"); ?>" href="AddProducts.php?lang=<?= $language ?>">
                        <?php if ($language == "EN")
                                print "Products Management";
                        else
                                print "Management de produits"; ?>
                </a>
                <?php
                if ($language == "EN") {
                        ?>
                        <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=FR">Francais</a>
                        <?php
                } else {
                        ?>
                        <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=EN">English</a>
                        <?php
                }
                ?>

        </div>
        }
*/
