<!DOCTYPE html>
<html lang="en">

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
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>&nbsp;Data Column&nbsp;</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data 1</td>
            <td><a class="btn btn-info btn-sm" role="button" href="data.php?id=<?php echo $d="Data 1"; ?>">edit</a></td>
                    </tr>
                    <tr>
                        <td>Data 2</td>
                        <td><a class="btn btn-info btn-sm" role="button" href="data.php?id=<?php echo $d="Data 2"; ?>">edit</a></td>
                    </tr>
                    <tr>
                        <td>Data 3</td>
                        <td><a class="btn btn-info btn-sm" role="button" href="data.php?id=<?php echo $d="Data 3"; ?>">edit</a></td>
                    </tr>
                    <tr>
                        <td>Data 4</td>
                        <td><a class="btn btn-info btn-sm" role="button" href="data.php?id=<?php echo $d="Data 4"; ?>">edit</a></td>
                    </tr>
                    <tr>
                        <td>Data 5</td>
                        <td><a class="btn btn-info btn-sm" role="button" href="data.php?id=<?php echo $d="Data 5"; ?>">edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>