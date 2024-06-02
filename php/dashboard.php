<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-right">
        <a href="dashboard.php?logout=true" class="btn btn-danger">Log Out</a>
    </div>
    <div class="container mt-5 text-center">
        <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
        <p>
            <a href="verileri_goruntule.php" class="btn btn-primary">View Products</a>
            <a href="personel_goruntule.php" class="btn btn-primary">View Staff</a>

        </p>
        <!-- Diğer dashboard içeriği -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
