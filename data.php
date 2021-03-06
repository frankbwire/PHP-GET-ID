<!DOCTYPE html>
<html lang="en">
<?php
    $id=$_GET["id"];
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PHP GET ID</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">PHP GET ID</h4>
            <h6 class="text-muted card-subtitle mb-2" style="font-size: 12px;">author&nbsp;<i class="fa fa-copyright"></i> Frankline Bwire</h6>
            <p class="card-text">This is:&nbsp;<span class="text-danger" style="font-weight: bold;letter-spacing: 2px;font-size: 14px;"><?php echo $id; ?></span></p>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>