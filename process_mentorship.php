<?php
// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "root", "", "login"); // Replace with your actual database details
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['get_mentorship'])) {
    $investor_username = $_POST['investor_username'];

    // Validate and sanitize the input if necessary

    // Query to retrieve investor details
    $sql = "SELECT * FROM users WHERE username = ? AND user_type = 'Investor'";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $investor_username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {
        // Investor found, you can fetch and use their details here
        $investor_data = mysqli_fetch_assoc($result);

        // Implement your mentorship logic here
        // For example, send a mentorship request to the investor
        // You can also redirect to a confirmation page or display a success message
        echo "Mentorship request sent to " . $investor_data['username'];
    } else {
        // Investor not found or not an investor
        echo "Investor not found or invalid username.";
    }

    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
