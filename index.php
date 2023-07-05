<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="form-style.css">
    <title>User Schedule</title>
</head>
<body>
<?php
// Assuming you have a database connection established

// Retrieve the user's schedule from the database
// $userID = $_SESSION["user"]["id"]; // Assuming you have stored the user ID in the session
// $sql = "SELECT * FROM schedule WHERE user_id = $userID";
// $result = mysqli_query($connection, $sql);
// if ($result) {
//     // Display the schedule
//     echo '<table>';
//     echo '<tr><th>Start Time</th><th>End Time</th></tr>';
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo '<tr>';
//         echo '<td>' . $row['start_time'] . '</td>';
//         echo '<td>' . $row['end_time'] . '</td>';
//         echo '</tr>';
//     }
//     echo '</table>';
// } else {
//     // Handle the case when there's an error retrieving the schedule
//     echo 'Error: ' . mysqli_error($connection);
// }

// mysqli_close($connection);
// ?>
    <div class="container">
        <h1>My Schedule Time</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="free_schedule" class="form-label">Free_schedule</label>
                <input type="text" class="form-control" id="free_schedule" name="free_schedule" required>
            </div>
        </form>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>