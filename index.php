<?php
include './includes.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="Stylesheet" href="./css/app.css">
    <title>rooster</title>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 pull-right">
                <div class="card-header">
                        <form action="#" method="get">
                        <div class="row">
                        <div class="col-6 pull-right">
                            <input type="month"  class="form-control" value="<?php echo isset($_GET['date'])?$_GET['date']:'' ?>" name="date" id="search">
                        </div>
                        <div class="col-3 pull-right">
                            <button type="submit" class="btn btn-primary">Go</button>
                        </div>
                        </div>
                        </form>
                </div>
                <div class="card">
                    <div class=" table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <?php echo  $header ?>
                            </thead>
                            <tbody>
                                <?php echo $tbody ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>