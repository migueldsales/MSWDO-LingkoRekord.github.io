<?php

require 'socialservices-config.php';

if(isset($_POST['save_PWD']))
{
    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $PWD_ID = mysqli_real_escape_string($connect, $_POST['PWD_ID']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $TypeOfDisability = mysqli_real_escape_string($connect, $_POST['TypeOfDisability']);
    $CauseOfDisability = mysqli_real_escape_string($connect, $_POST['CauseOfDisability']);
    $PWDStatus = mysqli_real_escape_string($connect, $_POST['PWDStatus']);
    $DateIssued = mysqli_real_escape_string($connect, $_POST['DateIssued']);

    if($PWD_ID == NULL || $Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $TypeOfDisability == NULL || $CauseOfDisability == NULL || $PWDStatus == NULL || $DateIssued == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO pwd_form (Barangay, ID_Number, LastName, FirstName, MiddleName, DateOfBirth, Age, Sex, CivilStatus, TypeOfDisability, CauseOfDisability, pwdStatus, DateIssued) VALUES ('$Barangay', '$PWD_ID','$LastName','$FirstName', '$MiddleName','$txtbirthdate', '$age','$Sex', '$CivilStatus','$TypeOfDisability', '$CauseOfDisability', '$PWDStatus', '$DateIssued')";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Person with Disability Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Person with Disability Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_PWD']))
{
    $pwd_id = mysqli_real_escape_string($connect, $_POST['pwd_idNum']);

    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $PWD_ID = mysqli_real_escape_string($connect, $_POST['PWD_ID']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $TypeOfDisability = mysqli_real_escape_string($connect, $_POST['TypeOfDisability']);
    $CauseOfDisability = mysqli_real_escape_string($connect, $_POST['CauseOfDisability']);
    $PWDStatus = mysqli_real_escape_string($connect, $_POST['PWDStatus']);
    $DateIssued = mysqli_real_escape_string($connect, $_POST['DateIssued']);

    if($PWD_ID == NULL || $Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $TypeOfDisability == NULL || $CauseOfDisability == NULL || $PWDStatus == NULL || $DateIssued == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    $query = "UPDATE pwd_form SET Barangay='$Barangay', ID_Number='$PWD_ID', LastName='$LastName', FirstName='$FirstName', MiddleName='$MiddleName', DateOfBirth='$txtbirthdate', Age='$age', Sex='$Sex', CivilStatus='$CivilStatus', TypeOfDisability='$TypeOfDisability', CauseOfDisability='$CauseOfDisability', pwdStatus='$PWDStatus', DateIssued='$DateIssued' WHERE ID='$pwd_id' ";

    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Person with Disability Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Person with Disability Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['pwd_id']))
{
    $pwd_id = mysqli_real_escape_string($connect, $_GET['pwd_id']);

    $query = "SELECT * FROM pwd_form WHERE ID='$pwd_id'";
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $pwd_id = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Person with Disability Fetch Successfully by ID',
            'data' => $pwd_id
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Person with Disability ID Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_PWD']))
{
    $pwd_id = mysqli_real_escape_string($connect, $_POST['pwd_id']);

    $query = "DELETE FROM pwd_form WHERE ID='$pwd_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Person with Disability Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Person with Disability Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>