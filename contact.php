<?php
// Include the database connection file
require_once 'dbinfo.php';

// Initialize variables

// Process form data when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate title
    
        
   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

    // Check input errors before inserting into database
    
        // Prepare an insert statement
        $sql = 'INSERT INTO contactus(name, email, message, subject) VALUES (?, ?, ?, ?)';

        if ($stmt = $con->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param('ssss', $name, $email, $message, $subject);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to the admin index page after successful addition
                header('location: index.php');
                exit();
            } else {
                echo 'Something went wrong. Please try again later.';
            }

            // Close the statement
            $stmt->close();
        
    }

    // Close the database connection
    $con->close();
}
?>
