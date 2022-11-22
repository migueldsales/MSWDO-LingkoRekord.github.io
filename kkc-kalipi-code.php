<?php

require 'socialservices-config.php';

if(isset($_POST['save_KKC_KALIPI']))
{
    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $NumOfDependents = mysqli_real_escape_string($connect, $_POST['NumOfDependents']);
    $EducationalAttainment = mysqli_real_escape_string($connect, $_POST['EducationalAttainment']);
    $Occupation = mysqli_real_escape_string($connect, $_POST['Occupation']);
    $SkillInterest = mysqli_real_escape_string($connect, $_POST['SkillInterest']);
    $WithID = mysqli_real_escape_string($connect, $_POST['WithID']);
    $SAPNational = mysqli_real_escape_string($connect, $_POST['SAPNational']);
    $SAPLGU = mysqli_real_escape_string($connect, $_POST['SAPLGU']);
    $SLPMember = mysqli_real_escape_string($connect, $_POST['SLPMember']);
    $FourPSMember = mysqli_real_escape_string($connect, $_POST['FourPSMember']);
    $Status = mysqli_real_escape_string($connect, $_POST['Status']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL  || $NumOfDependents == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $SkillInterest == NULL || $WithID == NULL || $SAPNational == NULL || $SAPLGU == NULL || $SLPMember == NULL || $FourPSMember == NULL || $Status == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO kkc_kalipi_form (Barangay, LastName, FirstName, MiddleName, DateOfBirth, Age, Sex, CivilStatus, NumOfDependents, EducationalAttainment, Occupation, SkillInterest, WithID, SAPNational, SAPLGU, SLP, FourPS, kkcStatus) VALUES ('$Barangay', '$LastName','$FirstName', '$MiddleName', '$txtbirthdate', '$age','$Sex', '$CivilStatus', '$NumOfDependents', '$EducationalAttainment', '$Occupation', '$SkillInterest', '$WithID', '$SAPNational','$SAPLGU', '$SLPMember', '$FourPSMember', '$Status') ";

    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'KKC-KALIPI Member Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'KKC-KALIPI Member Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_KKC_KALIPI']))
{
    $kkc_kalipi_id = mysqli_real_escape_string($connect, $_POST['kkc_kalipi_idNum']);

    $Barangay = mysqli_real_escape_string($connect, $_POST['Barangay']);
    $LastName = mysqli_real_escape_string($connect, $_POST['LastName']);
    $FirstName = mysqli_real_escape_string($connect, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
    $txtbirthdate = mysqli_real_escape_string($connect, $_POST['txtbirthdate']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
    $CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
    $NumOfDependents = mysqli_real_escape_string($connect, $_POST['NumOfDependents']);
    $EducationalAttainment = mysqli_real_escape_string($connect, $_POST['EducationalAttainment']);
    $Occupation = mysqli_real_escape_string($connect, $_POST['Occupation']);
    $SkillInterest = mysqli_real_escape_string($connect, $_POST['SkillInterest']);
    $WithID = mysqli_real_escape_string($connect, $_POST['WithID']);
    $SAPNational = mysqli_real_escape_string($connect, $_POST['SAPNational']);
    $SAPLGU = mysqli_real_escape_string($connect, $_POST['SAPLGU']);
    $SLPMember = mysqli_real_escape_string($connect, $_POST['SLPMember']);
    $FourPSMember = mysqli_real_escape_string($connect, $_POST['FourPSMember']);
    $Status = mysqli_real_escape_string($connect, $_POST['Status']);

    if($Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL  || $NumOfDependents == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $SkillInterest == NULL || $WithID == NULL || $SAPNational == NULL || $SAPLGU == NULL || $SLPMember == NULL || $FourPSMember == NULL || $Status == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE kkc_kalipi_form SET Barangay='$Barangay', LastName='$LastName', FirstName='$FirstName', MiddleName='$MiddleName', DateOfBirth='$txtbirthdate', Age='$age', Sex='$Sex', CivilStatus='$CivilStatus', NumOfDependents='$NumOfDependents', EducationalAttainment='$EducationalAttainment', Occupation='$Occupation', SkillInterest='$SkillInterest', WithID='$WithID', SAPNational='$SAPNational', SAPLGU='$SAPLGU', SLP='$SLPMember', FourPS='$FourPSMember', kkcStatus='$Status' 
        WHERE ID='$kkc_kalipi_id' ";

    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'KKC-KALIPI Member Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'KKC-KALIPI Member Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['kkc_kalipi_id']))
{
    $kkc_kalipi_id = mysqli_real_escape_string($connect, $_GET['kkc_kalipi_id']);

    $query = "SELECT * FROM kkc_kalipi_form WHERE ID='$kkc_kalipi_id'";
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $kkc_kalipi_id = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'KKC-KALIPI Member Fetch Successfully by ID',
            'data' => $kkc_kalipi_id
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'KKC-KALIPI Member ID Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_KKC_KALIPI']))
{
    $kkc_kalipi_id = mysqli_real_escape_string($connect, $_POST['kkc_kalipi_id']);

    $query = "DELETE FROM kkc_kalipi_form WHERE ID='$kkc_kalipi_id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'KKC-KALIPI Member Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'KKC-KALIPI Member Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>