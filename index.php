<?php


// Include config file
require_once 'dbinfo.php';




//Fetch Team members from databse
$contact_query = "SELECT * FROM contactus";
$contact_result = mysqli_query($con, $contact_query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 50px 0; /* Increase the top and bottom padding */
            /* Add a dark shadow */
            box-shadow: inset 0 0 2000px rgba(0, 0, 0, 0.5);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        h1 {
            margin-top: 0;
        }

        section {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        ul {
            padding: 0;
            list-style-type: none;
        }

        ul li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        ul li a {
            color: #007bff;
            text-decoration: none;
            margin-left: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        textarea{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            radius:7px;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: green;
    color: white;
    text-align: center;
    padding: 10px 0;
}
    </style>
</head>

<body>
    <header style="background-color: aqua;">
        <h1>Welcome to Contact Us Form Created by InderPalSingh | 202107782</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Contact Us</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        
        
        
       
        
        
        <section>
            <h2>Contact Us</h2>
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="email">Subject</label>
                <input type="text" id="message" name="subject" required><br><br>
                <label for="email">Message</label>
                <textarea name="message" required></textarea><br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section>
            <h2>Contact Us</h2>
            <ul>
            <?php while ($contact = mysqli_fetch_assoc($contact_result)) { ?>
                    <li>
                        <div>
                            <?php echo $contact['name']; ?>
                        </div>
                        <div>
                            <?php echo $contact['email']; // Display first 100 characters of content ?>
                        </div>
                        <div>
                            <?php echo $contact['subject']; // Display first 100 characters of content ?>
                        </div>
                        <div>
                            <?php echo $contact['message']; // Display first 100 characters of content ?>
                        </div>
                        
                    </li>
                <?php } ?>
            </ul>
        </section>
        <footer>
        <p>&copy; 2024 InderPal Singh | Student ID: 202107782</p>
            </footer>
    </main>
</body>

</html>
