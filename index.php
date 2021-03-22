<?php
include './includes.php';
//date range
$number_of_days_in_month = cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));

$first_day = date('Y').'-'.date('m').'-01';
$last_day = date('Y-m-d',strtotime(date('Y-m').'-01 + '.$number_of_days_in_month.'days')); 
die;
$days = new DatePeriod(
    new DateTime($first_day),
    new DateInterval('P1D'),
    new DateTime($last_day)
);
if(isset($_GET['date'])){

}
//departments and users array
$deps = [
    'Account' => [
        "Ross",
        "Bruce", "Cook",
        "Carolyn"
    ],
    'Admin' => [
        "Rachel", "Edwards",
        "Christopher", "Perez",
        "Thomas",
    ]
];
//create header
$header = '<tr> <th>Staff</th>';
$days_count = 1;

foreach ($days as $day) {
    $header .= '<th>' . date_format($day, "d D") . '</th>';
    $days_count++;
}
$header .= '</tr>';

$tbody = '';

//create empty td set to fill in 
$empty_cols = '';
for ($i = 1; $i < $days_count; $i++) {
    $empty_cols .= '<td></td>';
}
$empty_cols .= "</tr>";

//loop through each department user
foreach ($deps as $dep_name => $staff_members) {
    $tbody .= "<tr colspan='$days_count' class='gray-row' ><td>$dep_name</td></tr>";
    foreach ($staff_members as $staff) {
        $tbody .= "<tr><td>$staff</td>$empty_cols";
    }
}

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
                            <input type="date" class="form-control" name="date" id="search">
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