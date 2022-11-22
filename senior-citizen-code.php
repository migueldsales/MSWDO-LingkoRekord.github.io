<?php

require 'senior-citizen-config.php';

if(isset($_POST['save_SeniorCitizen'])) {
    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $SCStatus = mysqli_real_escape_string($connect, $_POST['SCStatus']);
    $OSCAIdNumber = mysqli_real_escape_string($connect, $_POST['OSCAIdNumber']);
    $DateIssued = mysqli_real_escape_string($connect, $_POST['DateIssued']);
    $Remark = mysqli_real_escape_string($connect, $_POST['Remark']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $SCStatus == NULL || $OSCAIdNumber == NULL || $DateIssued == NULL || $Remark == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All Field Are Mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO seniorcitizen_form (barangay, lastName, firstName, middleName, birthDay, age, sex, civilStatus, scStatus, oscaIdNumber, dateIssued, remark) VALUES ('$Barangay', '$LastName', '$FirstName', '$MiddleName', '$txtbirthdate', '$age', '$Sex', '$CivilStatus', '$SCStatus', '$OSCAIdNumber', '$DateIssued', '$Remark') ";
    $query_run = mysqli_query($connect, $query);

    if($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Senior Citizen Added Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else {
        $res = [
            'status' => 500,
            'message' => 'Senior Citizen Added Failed'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_GET['seniorCitizen_id'])) {
    $seniorCitizen_id = mysqli_real_escape_string($connect, $_GET['seniorCitizen_id']);

    $query = "SELECT * FROM seniorcitizen_form WHERE ID='$seniorCitizen_id'";
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $seniorCitizen = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Senior Citizen Fetch Successfully by ID',
            'data' => $seniorCitizen
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Senior Citizen ID Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['update_SeniorCitizen']))
{
    $seniorCitizen_id = mysqli_real_escape_string($connect, $_POST['seniorCitizen_id']);

    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['txtage']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $SCStatus = mysqli_real_escape_string($connect, $_POST['SCStatus']);
    $OSCAIdNumber = mysqli_real_escape_string($connect, $_POST['OSCAIdNumber']);
    $DateIssued = mysqli_real_escape_string($connect, $_POST['DateIssued']);
    $Remark = mysqli_real_escape_string($connect, $_POST['Remark']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $SCStatus == NULL || $OSCAIdNumber == NULL || $DateIssued == NULL || $Remark == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All Field Are Mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE seniorcitizen_form SET barangay='$Barangay', lastName='$LastName', firstName='$FirstName', middleName='$MiddleName', birthDay='$txtbirthdate', age='$age', sex='$Sex', civilStatus='$CivilStatus', scStatus='$SCStatus', oscaIdNumber='$OSCAIdNumber', dateIssued='$DateIssued', remark='$Remark' 
    WHERE ID='$seniorCitizen_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Senior Citizen Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Senior Citizen Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_SeniorCitizen'])) {

    $seniorCitizen_id = mysqli_real_escape_string($connect, $_POST['seniorCitizen_id']);

    $query = "DELETE FROM seniorcitizen_form WHERE ID='$seniorCitizen_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Senior Citizen Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Senior Citizen Not Deleted'
        ];
        echo json_encode($res);
        return;
    }

};

?>