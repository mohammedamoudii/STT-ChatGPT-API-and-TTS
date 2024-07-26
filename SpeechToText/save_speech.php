<?php
// save_speech.php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$port = "3307";
$dbname = "storedtext"; // Add your database name here

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if finalTranscript is set
if (isset($_POST['finalTranscript'])) {
    $finalTranscript = $conn->real_escape_string($_POST['finalTranscript']);

    // Insert the final transcript into the database
    $sql = "INSERT INTO speech_transcripts (transcript) VALUES ('$finalTranscript')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        
        // Save the final transcript to a text file
        $file = fopen("latest_transcript.txt", "w");
        if ($file) {
            fwrite($file, $finalTranscript);
            fclose($file);
        } else {
            echo "Error: Unable to write to file.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
