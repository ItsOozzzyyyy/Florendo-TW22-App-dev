<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 20px;
        }

        .container{
            width: 800px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
        }

        h1{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        td{
            padding: 8px;
            border: 1px solid black;
        }

        .title{
            background-color: white;
            font-weight: bold;
        }

    </style>
</head>

<body>

<?php

$studentNumber = "2024123456";

$firstName = "Mozziel";
$middleName = "Gonzales";
$lastName = "Florendo";

$gender = "Male";

$birthDate = "January 11, 2006";

$address = "Binangonan Rizal";

$contactNumber = 9695257843;

$Course = "Bachelor of Science in Information Technology";

$specialization = "Web and Mobile Application Development";

$schoolName = "Child Jesus of Prague School - 2017 - 2024";


$fullName = strtoupper($lastName) . ", " .
ucfirst($firstName) . " " .
ucfirst($middleName);

$formattedContact = number_format($contactNumber);

?>

<div class="container">

    <h1>Student Registration Form</h1>

    <table>

        <tr>
            <td class="title" colspan="2">Student Information</td>
        </tr>

        <tr>
            <td>Student Number</td>
            <td><?php echo $studentNumber; ?></td>
        </tr>

        <tr>
            <td>Full Name</td>
            <td><?php echo $fullName; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo strtoupper($gender); ?></td>
        </tr>

        <tr>
            <td>Birth Date</td>
            <td><?php echo $birthDate; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

        <tr>
            <td>Contact Number</td>
            <td><?php echo $formattedContact; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $Course; ?></td>
        </tr>

        <tr>
            <td>Specialization</td>
            <td><?php echo $specialization; ?></td>
        </tr>

        <tr>
            <td>Previous School</td>
            <td><?php echo $schoolName; ?></td>
        </tr>

    </table>

</div>

</body>
</html>
