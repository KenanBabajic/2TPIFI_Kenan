<?php
// Database connection parameters
$servername = "localhost";  // Change this to your database server
$username = "root";      // Change this to your database username
$password = "";      // Change this to your database password
$dbname = "Translationsdata";   // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all translations
$sql = "SELECT StringName, DescriptionEN, DescriptionFR FROM Translations";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Store translations in an associative array
    $translations = array();
    while ($row = $result->fetch_assoc()) {
        $translations[$row['StringName']] = array(
            'en' => $row['DescriptionEN'],
            'fr' => $row['DescriptionFR']
        );
    }

    // Close the database connection
    $conn->close();

    // Read the SQL file
    $sql_file_path = 'Translations.sql';  // Change this to the path of your SQL file
    $sql_content = file_get_contents($sql_file_path);

    // Replace translations in the SQL file
    foreach ($translations as $stringName => $translation) {
        $sql_content = str_replace("'$stringName'", "'" . addslashes($translation['en']) . "'", $sql_content);
        $sql_content = str_replace("'$stringName'", "'" . addslashes($translation['fr']) . "'", $sql_content);
    }

    // Save the modified SQL file
    file_put_contents($sql_file_path, $sql_content);

    echo "Translations replaced successfully in the SQL file.";
} else {
    echo "No translations found in the database.";
}

