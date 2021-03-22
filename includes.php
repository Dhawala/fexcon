<?php
//date range
$number_of_days_in_month = cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));

$first_day = date('Y').'-'.date('m').'-01';
$last_day = date('Y-m-d',strtotime(date('Y-m').'-01 + '.$number_of_days_in_month.'days')); 

//GET request is present 
if(isset($_GET['date'])){
    $date = strtotime(date($_GET['date']));
    $year = date('Y',$date);
    $month = date('m',$date);
    $number_of_days_in_month = cal_days_in_month(CAL_GREGORIAN,$month,$year);

    $first_day = $year.'-'.$month.'-01';
    $last_day = date('Y-m-d',strtotime($year.'-'.$month.'-01 + '.$number_of_days_in_month.'days')); 
}

$days = new DatePeriod(
    new DateTime($first_day),
    new DateInterval('P1D'),
    new DateTime($last_day)
);

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
    $tbody .= "<tr class='gray-row' ><td colspan='".($days_count-2)."'>$dep_name</td>";
    foreach ($staff_members as $staff) {
        $tbody .= "<tr><td>$staff</td>$empty_cols";
    }
}

?>
