<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show table user</title>
    <link rel="stylesheet" href="../day3/color.css" />
    <style>
        table{
            border-collapse: collapse;
        }
        th {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>

    <table id="table_1" style="border: 1px solid black;">
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Name Surname</th>
            <th>Citizin Id</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Create Time</th>
            <th>Last Update</th>
            <th>Status</th>
            <th>Provinces</th>
            <th>Districts</th>
            <th>Sub-Districts</th>
            <th>Function</th>
        </tr>

        <?PHP

        if (count($array_result) > 0) {


            $tr_row = "";
            for ($i = 0; $i < count($array_result); $i++) {
                $status = "De active";
                $createtime = $array_result[$i]->createtime;
                $updatetime = $array_result[$i]->updatetime;
                $date_1 = date_create("$createtime");
                $year = date_format($date_1, "dmY");
                $time = date_format($date_1, "h:i:s");
                $date = date_format($date_1, "d");
                $month = date_format($date_1, "m");
                $year = date_format($date_1, "Y") + 543;
                $day = substr($date, 0, 2);
                $hour = substr($date, 8, 2);
                $min = substr($date, 10, 2);
                $sec = substr($date, 12, 2);

                $month_cal = cal($month);

                $datetime = $day . " " . $month_cal . " " . $year . " " . $time;

                // $day= substr($date)
                // echo $date;
                if ($array_result[$i]->status == '1') {
                    $status = 'Active';
                }

                $tr_row .= "
                <form method='POST'>
                <tr>
            <td>" . $i + '1' . "</td>
            <td>" . $array_result[$i]->username . "</td>
            <td>" . $array_result[$i]->name . " " . $array_result[$i]->surname . "</td>
            <td>" . $array_result[$i]->citizin_id . "</td>
            <td>" . $array_result[$i]->email . "</td>
            <td><input name='phonenumber'  value='" . $array_result[$i]->phone_number . "'></input></td>
            <td>" . $array_result[$i]->address . "</td>
            <td>" . $datetime . "</td>
            <td>" . $updatetime . "</td>
            <td>" . $status . "</td>
            <td>" . (isset($array_result[$i]->province) && $array_result[$i]->province ? $array_result[$i]->province : '-'). "</td>
           <td>" . (isset($array_result[$i]->distric) && $array_result[$i]->distric ? $array_result[$i]->distric : '-'). "</td>
           <td>" . (isset($array_result[$i]->subdistric) && $array_result[$i]->subdistric ? $array_result[$i]->subdistric : '-'). "</td>
            <td><input type='hidden' name='id_show' value='" . $array_result[$i]->id . "' />
                <button type='submit' name='button_del'  id='btn_del'>Delete</button><br>

                <button type='submit' name='button_up'  id='btn_up'>Update</button></td>
                
            </form>
            </tr>";
            }
        } else {
            $tr_row .= "<tr><td colspan ='9'>..No Data..</td></tr>";
        }
        echo $tr_row;

        function cal($y)
        {
            $month = 0;

            if (strlen($y) > 2) {
                return false;
            }
            if (strlen($y) == 1) {
                $month =  '0' . $y;
            }
            if ($y == '01') {
                $month = 'ม.ค.';
            } else if ($y == '02') {
                $month = 'ก.ภ.';
            } else if ($y == '03') {
                $month = 'มี.ค.';
            } else if ($y == '04') {
                $month = 'เม.ษ.';
            } else if ($y == '05') {
                $month = 'พ.ค.';
            } else if ($y == '06') {
                $month = 'มิ.ย.';
            } else if ($y == '07') {
                $month = 'ก.ค.';
            } else if ($y == '08') {
                $month = 'ส.ค.';
            } else if ($y == '09') {
                $month = 'ก.ย.';
            } else if ($y == '10') {
                $month = 'ต.ค.';
            } else if ($y == '11') {
                $month = 'พ.ย.';
            } else if ($y == '12') {
                $month = 'ธ.ค.';
            }

            return $month;
        }
        // echo cal();

        ?>
    </table>
    <button type="button" id="btn" onclick="window.location.href= '../day3/table.php'">Go to Register</button>
</body>

</html>