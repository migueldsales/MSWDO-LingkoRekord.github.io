<?php

require 'socialservices-config.php';

if(isset($_POST['save_PYA']))
{
    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $EducationalAttainment = mysqli_real_escape_string($connect, $_POST['EducationalAttainment']);
    $Occupation = mysqli_real_escape_string($connect, $_POST['Occupation']);
    $SkillInterest = mysqli_real_escape_string($connect, $_POST['SkillInterest']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $SkillInterest == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO pya_form (Barangay, LastName, FirstName, MiddleName, DateOfBirth, Age, Sex, CivilStatus, EducationalAttainment, Occupation, SkillInterest) VALUES ('$Barangay', '$LastName','$FirstName', '$MiddleName','$txtbirthdate', '$age','$Sex', '$CivilStatus','$EducationalAttainment', '$Occupation', '$SkillInterest')";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'PYA Member Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'PYA Member Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_PYA']))
{
    $pya_id = mysqli_real_escape_string($connect, $_POST['pya_idNum']);

    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $EducationalAttainment = mysqli_real_escape_string($connect, $_POST['EducationalAttainment']);
    $Occupation = mysqli_real_escape_string($connect, $_POST['Occupation']);
    $SkillInterest = mysqli_real_escape_string($connect, $_POST['SkillInterest']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $SkillInterest == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE pya_form SET Barangay='$Barangay', LastName='$LastName', FirstName='$FirstName', MiddleName='$MiddleName', DateOfBirth='$txtbirthdate', Age='$age', Sex='$Sex', CivilStatus='$CivilStatus', EducationalAttainment='$EducationalAttainment', Occupation='$Occupation', SkillInterest='$SkillInterest'
        WHERE ID='$pya_id' ";

    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'PYA Member Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'PYA Member Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['pya_id']))
{
    $pya_id = mysqli_real_escape_string($connect, $_GET['pya_id']);

    $query = "SELECT * FROM pya_form WHERE ID='$pya_id'";
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $pya_id = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'PYA Member Fetch Successfully by ID',
            'data' => $pya_id
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'PYA Member ID Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_PYA']))
{
    $pya_id = mysqli_real_escape_string($connect, $_POST['pya_id']);

    $query = "DELETE FROM pya_form WHERE ID='$pya_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'PYA Member Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'PYA Member Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>