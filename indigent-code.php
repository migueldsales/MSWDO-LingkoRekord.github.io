<?php

require 'indigent-config.php';

if(isset($_POST['save_Indigent'])) {
    $SWD_ID = mysqli_real_escape_string($connect, $_POST['SWD_ID']);
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
    $NumOfDependents = mysqli_real_escape_string($connect, $_POST['NumOfDependents']);
    $MemberOfSecGroup = mysqli_real_escape_string($connect, $_POST['MemberOfSecGroup']);
    $SapRecipient = mysqli_real_escape_string($connect, $_POST['SapRecipient']);
    $Aics1Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics1Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $Aics2Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics2Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $Aics3Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics3Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $DateGiven = mysqli_real_escape_string($connect, $_POST['DateGiven']);
    $TypeOfServiceRendered = mysqli_real_escape_string($connect, $_POST['TypeOfServiceRendered']);

    if($SWD_ID == NULL || $Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $NumOfDependents == NULL || $MemberOfSecGroup == NULL || $SapRecipient == NULL || $Aics1Amount == NULL || $Aics1Date == NULL || $Aics2Amount == NULL || $Aics2Date == NULL || $Aics3Amount == NULL || $Aics3Date == NULL || $DateGiven == NULL || $TypeOfServiceRendered == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All Field Are Mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO indigent_form (SWD_ID, Barangay, LastName, FirstName, MiddleName, DateOfBirth, Age, Sex, CivilStatus, EducationalAttainment, Occupation, NumOfDependents, MemberOfSecGroup, SapRecipient, Aics1Amount, Aics1Date, Aics2Amount, Aics2Date, Aics3Amount, Aics3Date, DateGiven, TypeOfServiceRendered) VALUES ('$SWD_ID', '$Barangay', '$LastName', '$FirstName', '$MiddleName', '$txtbirthdate', '$age', '$Sex', '$CivilStatus', '$EducationalAttainment', '$Occupation', '$NumOfDependents', '$MemberOfSecGroup', '$SapRecipient', '$Aics1Amount', '$Aics1Date', '$Aics2Amount', '$Aics2Date', '$Aics3Amount', '$Aics3Date', '$DateGiven', '$TypeOfServiceRendered') ";
    $query_run = mysqli_query($connect, $query);

    if($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Indigent Added Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else {
        $res = [
            'status' => 500,
            'message' => 'Indigent Citizen Added Failed'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_GET['indigent_id'])) {
    $indigent_id = mysqli_real_escape_string($connect, $_GET['indigent_id']);

    $query = "SELECT * FROM indigent_form WHERE ID='$indigent_id'";
    $query_run = mysqli_query($connect, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $indigent = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Indigent Fetch Successfully by ID',
            'data' => $indigent
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Indigent ID Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['update_Indigent']))
{
    $indigent_id = mysqli_real_escape_string($connect, $_POST['indigent_id']);

    $SWD_ID = mysqli_real_escape_string($connect, $_POST['SWD_ID']);
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
    $NumOfDependents = mysqli_real_escape_string($connect, $_POST['NumOfDependents']);
    $MemberOfSecGroup = mysqli_real_escape_string($connect, $_POST['MemberOfSecGroup']);
    $SapRecipient = mysqli_real_escape_string($connect, $_POST['SapRecipient']);
    $Aics1Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics1Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $Aics2Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics2Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $Aics3Amount = mysqli_real_escape_string($connect, $_POST['Aics1Amount']);
    $Aics3Date = mysqli_real_escape_string($connect, $_POST['Aics1Date']);
    $DateGiven = mysqli_real_escape_string($connect, $_POST['DateGiven']);
    $TypeOfServiceRendered = mysqli_real_escape_string($connect, $_POST['TypeOfServiceRendered']);

    if($SWD_ID == NULL || $Barangay == NULL || $LastName == NULL || $FirstName == NULL || $MiddleName == NULL || $txtbirthdate == NULL || $age == NULL || $Sex == NULL || $CivilStatus == NULL || $EducationalAttainment == NULL || $Occupation == NULL || $NumOfDependents == NULL || $MemberOfSecGroup == NULL || $SapRecipient == NULL || $Aics1Amount == NULL || $Aics1Date == NULL || $Aics2Amount == NULL || $Aics2Date == NULL || $Aics3Amount == NULL || $Aics3Date == NULL || $DateGiven == NULL || $TypeOfServiceRendered == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All Field Are Mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE indigent_form SET SWD_ID='$SWD_ID', Barangay='$Barangay', LastName='$LastName', FirstName='$FirstName', MiddleName='$MiddleName', DateOfBirth='$txtbirthdate', Age='$age', Sex='$Sex', CivilStatus='$CivilStatus', EducationalAttainment='$EducationalAttainment', Occupation='$Occupation', NumOfDependents='$NumOfDependents', MemberOfSecGroup='$MemberOfSecGroup', SapRecipient='$SapRecipient', Aics1Amount='$Aics1Amount', Aics1Date='$Aics1Date', Aics2Amount='$Aics2Amount', Aics2Date='$Aics2Date', Aics3Amount='$Aics3Amount', Aics3Date='$Aics3Date', DateGiven='$DateGiven', TypeOfServiceRendered='$TypeOfServiceRendered'
        WHERE ID='$indigent_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Indigent Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Indigent Citizen Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_Indigent'])) {

    $indigent_id = mysqli_real_escape_string($connect, $_POST['indigent_id']);

    $query = "DELETE FROM indigent_form WHERE ID='$indigent_id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Indigent Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Indigent Citizen Not Deleted'
        ];
        echo json_encode($res);
        return;
    }

};

?>