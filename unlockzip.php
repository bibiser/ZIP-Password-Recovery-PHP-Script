<?php
ini_set('max_execution_time', 0); // Set it to 0 for unlimited execution time
$zipFile = "zipped.zip"; // Your ZIP file
$extractTo = "unzipped"; // Extraction folder
$maxAttempts = 999999; // Maximum 6-digit numbers
$zip = new ZipArchive();
for ($password = 0; $password <= $maxAttempts; $password++) {
    $passwordStr = str_pad($password, 6, "0", STR_PAD_LEFT); // Ensures leading zeros
    // Display the tested password
    // echo "<pre>Testing password: $passwordStr\n</pre>";
    if ($zip->open($zipFile) === TRUE) {
        if ($zip->setPassword($passwordStr) && $zip->extractTo($extractTo)) {
            echo "<pre>Password found: $passwordStr\n</pre>";
            $zip->close();
            exit;
        }
        $zip->close();
    }
    // Display progress every 1000 attempts (optional to reduce output)
    if ($password % 1000 == 0) {
    //    echo "<pre>Progress: Tested $password passwords\n</pre>";
    }
}
echo "<pre>Password not found.\n</pre>";
?>
