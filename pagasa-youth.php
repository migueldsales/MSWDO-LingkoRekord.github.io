<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSWDO - LingkodRekord</title>
    <!-- Bootstrap CSS -->
    <style>
        <?php require 'pya.css' ?>
        <?php require 'css/bootstrap.min.css' ?>
    </style>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        function formatDate(date) {
            var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        }

        function getAge(dateString) {
            var birthdate = new Date().getTime();
            if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')) {
                // variable is undefined or null value
                birthdate = new Date().getTime();
            }

            birthdate = new Date(dateString).getTime();
            var now = new Date().getTime();

            // now find the difference between now and the birthdate
            var n = (now - birthdate)/1000;

            if (n < 604800){ // less than a week
                var day_n = Math.floor(n/86400);
                if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')) {
                    // variable is undefined or null
                    return '';
                }
                else {
                    return day_n + ' Day' + (day_n > 1 ? 's' : '') + ' Old';
                }
            } 
            else if (n < 2629743) { // less than a month
                var week_n = Math.floor(n/604800);
                if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')) {
                    return '';
                }
                else {
                    return week_n + ' Week' + (week_n > 1 ? 's' : '') + ' Old';
                }
            } 
            else if (n < 31562417) { // less than 24 months
                var month_n = Math.floor(n/2629743);
                if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')) {
                    return '';
                }
                else{
                    return month_n + ' Month' + (month_n > 1 ? 's' : '') + ' Old';
                }
            }
            else {
                var year_n = Math.floor(n/31556926);
                if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')) {
                    return year_n = '';
                }
                else {
                    return year_n + ' Year' + (year_n > 1 ? 's' : '') + ' Old';
                }
            }
        }

        function getAgeVal(pid) {
            var birthdate = formatDate(document.getElementById("txtbirthdate").value);
            var count = document.getElementById("txtbirthdate").value.length;

            if (count=='10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);

                if (res =='-' || res =='0') {
                    document.getElementById("txtbirthdate").value = "";
                    document.getElementById("txtage").value = "";
                    $('#txtbirthdate').focus();
                    return false;
                }
                else {
                    document.getElementById("txtage").value = age;
                }
            }
            else{
                document.getElementById("txtage").value = "";
                return false;
            }
        }

        function getAgeVal1(pid) {
            var birthdate = formatDate(document.getElementById("txtbirthdate1").value);
            var count = document.getElementById("txtbirthdate1").value.length;

            if (count=='10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);

                if (res =='-' || res =='0') {
                    document.getElementById("txtbirthdate1").value = "";
                    document.getElementById("txtage1").value = "";
                    $('#txtbirthdate1').focus();
                    return false;
                }
                else {
                    document.getElementById("txtage1").value = age;
                }
            }
            else{
                document.getElementById("txtage1").value = "";
                return false;
            }
        }

    </script>

</head>
<body>
    <section>
        <div class="container-fluid g-0 ">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- navbar brand / title -->
                    <a class="navbar-brand" href="index.html">
                      <img src="asset/dswd-logo.png" width="100" height="50" alt="">
                      <img src="asset/clg-seal.png" width="50" height="50" alt="">
                        <span id="" class="fw-bold ps-1">
                        MSWDO LingkodRekord
                        </span>
                    </a>
                <!-- toggle button for mobile nav -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item text-white">
                            <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown ">
                          <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Organization
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#child-labor">Child Labor</a></li>
                              <li><a class="dropdown-item" href="#household">Household</a></li>
                              <li><a class="dropdown-item" href="kkc-kalipi.php">KKC - Kalipi</a></li>
                              <li><a class="dropdown-item" href="move.php">MOVE</a></li>
                              <li><a class="dropdown-item" href="pagasa-youth.php">Pag-asa Youth Association</a></li>
                              <li><a class="dropdown-item" href="#vawc">VAWC</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown ">
                          <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Social Services
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="indigent.php">Indigent</a></li>
                              <li><a class="dropdown-item" href="personWithDisabilities.php">Person with Disability</a></li>
                              <li><a class="dropdown-item" href="senior-citizen.php">Senior Citizen</a></li>
                               <li><a class="dropdown-item" href="#solo-parent">Solo Parent</a></li>
                           </ul>
                       </li>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="analytics.html">Analytics</a>
                        </li>
                       <li class="nav-item dropdown ">
                            <a class="nav-link text-white" href="login.html">Logout</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Add PYA Modal -->
<div class="modal fade" id="pyaAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add PYA Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="savePYA">
                <div class="modal-body">

                    <div id="errorMessage" class="alert alert-warning d-none"></div>

                    <div class="mb-3">
                        <label for="">Barangay</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" name="Barangay" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="Agoho">Agoho</option>
                                        <option value="Anahawan">Anahawan</option>
                                        <option value="Anas">Anas</option>
                                        <option value="Apad Lutao">Apad Lutao</option>
                                        <option value="Apad Quezon">Apad Quezon</option>
                                        <option value="Apad Taisan">Apad Taisan</option>
                                        <option value="Atulayan">Atulayan</option>
                                        <option value="Baclaran">Baclaran </option>
                                        <option value="Bagong Silang">Bagong Silang</option>
                                        <option value="Balibago">Balibago</option>
                                        <option value="Bangkuruhan">Bangkuruhan</option>
                                        <option value="Bantolinao">Bantolinao</option>
                                        <option value="Barangay Uno (Poblacion)">Barangay Uno (Poblacion)</option>
                                        <option value="Barangay Dos (Poblacion)">Barangay Dos (Poblacion)</option>
                                        <option value="Barangay Tres (Poblacion)">Barangay Tres (Poblacion)</option>
                                        <option value="Barangay Cuatro (Poblacion)">Barangay Cuatro (Poblacion)</option>
                                        <option value="Barangay Cinco (Poblacion)">Barangay Cinco (Poblacion)</option>
                                        <option value="Bigaan">Bigaan</option>
                                        <option value="Binutas (Santa Brigida)">Binutas (Santa Brigida)</option>
                                        <option value="Biyan">Biyan</option>
                                        <option value="Bukal">Bukal</option>
                                        <option value="Buli">Buli</option>
                                        <option value="Dapdap">Dapdap</option>
                                        <option value="Dominlog">Dominlog</option>
                                        <option value="Doña Aurora">Doña Aurora</option>
                                        <option value="Guinosayan">Guinosayan</option>
                                        <option value="Ipil">Ipil</option>
                                        <option value="Kalibo (Santa Cruz)">Kalibo (Santa Cruz)</option>
                                        <option value="Kapaluhan">Kapaluhan</option>
                                        <option value="Katangtang">Katangtang</option>
                                        <option value="Kigtan">Kigtan</option>
                                        <option value="Kinamaligan">Kinamaligan</option>
                                        <option value="Kinalin Ibaba">Kinalin Ibaba</option>
                                        <option value="Kinalin Ilaya">Kinalin Ilaya</option>
                                        <option value="Kumaludkud">Kumaludkud</option>
                                        <option value="Kunalum">Kunalum</option>
                                        <option value="Kuyaoyao">Kuyaoyao</option>
                                        <option value="Lagay">Lagay</option>
                                        <option value="Lainglaingan">Lainglaingan</option>
                                        <option value="Lungib">Lungib</option>
                                        <option value="Mabini">Mabini</option>
                                        <option value="Madlangdungan">Madlangdungan</option>
                                        <option value="Maglipad (Rosario)">Maglipad (Rosario)</option>
                                        <option value="Maligaya">Maligaya</option>
                                        <option value="Mambaling">Mambaling</option>
                                        <option value="Manhulugin">Manhulugin</option>
                                        <option value="Marilag (Punaya)">Marilag (Punaya)</option>
                                        <option value="Mulay">Mulay</option>
                                        <option value="Pandanan">Pandanan</option>
                                        <option value="Pansol">Pansol</option>
                                        <option value="Patihan">Patihan</option>
                                        <option value="Pinagbayanan (Poblacion)">Pinagbayanan (Poblacion)</option>
                                        <option value="Pinagkamaligan (Poblacion)">Pinagkamaligan (Poblacion)</option>
                                        <option value="Pinagsakayan">Pinagsakayan</option>
                                        <option value="Pinagtalleran (Poblacion)">Pinagtalleran (Poblacion)</option>
                                        <option value="Rizal Ibaba">Rizal Ibaba</option>
                                        <option value="Rizal Ilaya">Rizal Ilaya</option>
                                        <option value="Sabang Uno (Poblacion)">Sabang Uno (Poblacion)</option>
                                        <option value="Sabang Dos (Poblacion">Sabang Dos (Poblacion)</option>
                                        <option value="Salvacion">Salvacion</option>
                                        <option value="San Quintin">San Quintin</option>
                                        <option value="San Roque Ibaba">San Roque Ibaba</option>
                                        <option value="San Roque Ilaya">San Roque Ilaya</option>
                                        <option value="Santa Cecilia">Santa Cecilia</option>
                                        <option value="Santa Maria (Poblacion)">Santa Maria (Poblacion)</option>
                                        <option value="Santa Milagrosa">Santa Milagrosa</option>
                                        <option value="Santa Rosa">Santa Rosa</option>
                                        <option value="Santo Angel (Pangahoy)">Santo Angel (Pangahoy)</option>
                                        <option value="Santo Domingo">Santo Domingo</option>
                                        <option value="Sinag">Sinag</option>
                                        <option value="Sumilang">Sumilang</option>
                                        <option value="Sumulong">Sumulong</option>
                                        <option value="Tabansak">Tabansak</option>
                                        <option value="Talingting">Talingting</option>
                                        <option value="Tamis">Tamis</option>
                                        <option value="Tikiwan">Tikiwan</option>
                                        <option value="Tiniguiban">Tiniguiban</option>
                                        <option value="Villa Magsino">Villa Magsino</option>
                                        <option value="Villa San Isidro">Villa San Isidro</option>
                                        <option value="Viñas">Viñas</option>
                                        <option value="Yaganak">Yaganak</option>
                                    </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Last Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="Last Name" name="LastName" aria-label="LastName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">First Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="First Name" name="FirstName" aria-label="FirstName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Middle Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="Middle Name" name="MiddleName" aria-label="MiddleName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="txtbirthdate">Date of Birth</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" name="txtbirthdate" id="txtbirthdate" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" autocomplete="off">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Age</label>
                        <input type="text" class="form-control" name="age" id="txtage" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Sex</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                            <select class="form-select" name="Sex" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Civil Status</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect03">Options</label>
                            <select class="form-select" name="CivilStatus" id="inputGroupSelect03">
                                <option selected>Choose...</option>
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Seperated">Seperated</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Highest Educational Attainment</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect04">Options</label>
                            <select class="form-select" name="EducationalAttainment" id="inputGroupSelect04">
                                <option selected>Choose...</option>
                                <option value="No Grade Completed">No Grade Completed</option>
                                <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                <option value="Elementary Graduate">Elementary Graduate</option>
                                <option value="High School Undergraduate">High School Undergraduate</option>
                                <option value="High School Graduate">High School Graduate</option>
                                <option value="Senior High School Undergraduate">Senior High School Undergraduate</option>
                                <option value="Senior High School Graduate">Senior High School Graduate</option>
                                <option value="College Undergraduate">College Undergraduate</option>
                                <option value="College Graduate">College Graduate</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Occupation</label>
                        <input type="text" class="form-control" name="Occupation" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Skill & Interest</label>
                        <input type="text" class="form-control" name="SkillInterest" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save PYA Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit PYA Modal -->
<div class="modal fade" id="pyaEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit PYA Member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatePYA">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="pya_idNum" id="pya_idNum" >

                <div class="mb-3">
                        <label for="">Barangay</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect05">Options</label>
                            <select class="form-select" name="Barangay" id="inputGroupSelect05">
                                        <option selected>Choose...</option>
                                        <option value="Agoho">Agoho</option>
                                        <option value="Anahawan">Anahawan</option>
                                        <option value="Anas">Anas</option>
                                        <option value="Apad Lutao">Apad Lutao</option>
                                        <option value="Apad Quezon">Apad Quezon</option>
                                        <option value="Apad Taisan">Apad Taisan</option>
                                        <option value="Atulayan">Atulayan</option>
                                        <option value="Baclaran">Baclaran </option>
                                        <option value="Bagong Silang">Bagong Silang</option>
                                        <option value="Balibago">Balibago</option>
                                        <option value="Bangkuruhan">Bangkuruhan</option>
                                        <option value="Bantolinao">Bantolinao</option>
                                        <option value="Barangay Uno (Poblacion)">Barangay Uno (Poblacion)</option>
                                        <option value="Barangay Dos (Poblacion)">Barangay Dos (Poblacion)</option>
                                        <option value="Barangay Tres (Poblacion)">Barangay Tres (Poblacion)</option>
                                        <option value="Barangay Cuatro (Poblacion)">Barangay Cuatro (Poblacion)</option>
                                        <option value="Barangay Cinco (Poblacion)">Barangay Cinco (Poblacion)</option>
                                        <option value="Bigaan">Bigaan</option>
                                        <option value="Binutas (Santa Brigida)">Binutas (Santa Brigida)</option>
                                        <option value="Biyan">Biyan</option>
                                        <option value="Bukal">Bukal</option>
                                        <option value="Buli">Buli</option>
                                        <option value="Dapdap">Dapdap</option>
                                        <option value="Dominlog">Dominlog</option>
                                        <option value="Doña Aurora">Doña Aurora</option>
                                        <option value="Guinosayan">Guinosayan</option>
                                        <option value="Ipil">Ipil</option>
                                        <option value="Kalibo (Santa Cruz)">Kalibo (Santa Cruz)</option>
                                        <option value="Kapaluhan">Kapaluhan</option>
                                        <option value="Katangtang">Katangtang</option>
                                        <option value="Kigtan">Kigtan</option>
                                        <option value="Kinamaligan">Kinamaligan</option>
                                        <option value="Kinalin Ibaba">Kinalin Ibaba</option>
                                        <option value="Kinalin Ilaya">Kinalin Ilaya</option>
                                        <option value="Kumaludkud">Kumaludkud</option>
                                        <option value="Kunalum">Kunalum</option>
                                        <option value="Kuyaoyao">Kuyaoyao</option>
                                        <option value="Lagay">Lagay</option>
                                        <option value="Lainglaingan">Lainglaingan</option>
                                        <option value="Lungib">Lungib</option>
                                        <option value="Mabini">Mabini</option>
                                        <option value="Madlangdungan">Madlangdungan</option>
                                        <option value="Maglipad (Rosario)">Maglipad (Rosario)</option>
                                        <option value="Maligaya">Maligaya</option>
                                        <option value="Mambaling">Mambaling</option>
                                        <option value="Manhulugin">Manhulugin</option>
                                        <option value="Marilag (Punaya)">Marilag (Punaya)</option>
                                        <option value="Mulay">Mulay</option>
                                        <option value="Pandanan">Pandanan</option>
                                        <option value="Pansol">Pansol</option>
                                        <option value="Patihan">Patihan</option>
                                        <option value="Pinagbayanan (Poblacion)">Pinagbayanan (Poblacion)</option>
                                        <option value="Pinagkamaligan (Poblacion)">Pinagkamaligan (Poblacion)</option>
                                        <option value="Pinagsakayan">Pinagsakayan</option>
                                        <option value="Pinagtalleran (Poblacion)">Pinagtalleran (Poblacion)</option>
                                        <option value="Rizal Ibaba">Rizal Ibaba</option>
                                        <option value="Rizal Ilaya">Rizal Ilaya</option>
                                        <option value="Sabang Uno (Poblacion)">Sabang Uno (Poblacion)</option>
                                        <option value="Sabang Dos (Poblacion">Sabang Dos (Poblacion)</option>
                                        <option value="Salvacion">Salvacion</option>
                                        <option value="San Quintin">San Quintin</option>
                                        <option value="San Roque Ibaba">San Roque Ibaba</option>
                                        <option value="San Roque Ilaya">San Roque Ilaya</option>
                                        <option value="Santa Cecilia">Santa Cecilia</option>
                                        <option value="Santa Maria (Poblacion)">Santa Maria (Poblacion)</option>
                                        <option value="Santa Milagrosa">Santa Milagrosa</option>
                                        <option value="Santa Rosa">Santa Rosa</option>
                                        <option value="Santo Angel (Pangahoy)">Santo Angel (Pangahoy)</option>
                                        <option value="Santo Domingo">Santo Domingo</option>
                                        <option value="Sinag">Sinag</option>
                                        <option value="Sumilang">Sumilang</option>
                                        <option value="Sumulong">Sumulong</option>
                                        <option value="Tabansak">Tabansak</option>
                                        <option value="Talingting">Talingting</option>
                                        <option value="Tamis">Tamis</option>
                                        <option value="Tikiwan">Tikiwan</option>
                                        <option value="Tiniguiban">Tiniguiban</option>
                                        <option value="Villa Magsino">Villa Magsino</option>
                                        <option value="Villa San Isidro">Villa San Isidro</option>
                                        <option value="Viñas">Viñas</option>
                                        <option value="Yaganak">Yaganak</option>
                                    </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Last Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="Last Name" name="LastName" id="LastName" aria-label="LastName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">First Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="First Name" name="FirstName" id="FirstName" aria-label="FirstName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Middle Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">✎</span>
                            <input type="text" class="form-control" placeholder="Middle Name" name="MiddleName" id="MiddleName" aria-label="MiddleName" aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="txtbirthdate">Date of Birth</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" name="txtbirthdate" id="txtbirthdate1" placeholder="mm/dd/yyyy" onkeyup="getAgeVal1(0)" onblur="getAgeVal1(0);" autocomplete="off">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Age</label>
                        <input type="text" class="form-control" name="age" id="txtage1" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Sex</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect06">Options</label>
                            <select class="form-select" name="Sex" id="inputGroupSelect06">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Civil Status</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect07">Options</label>
                            <select class="form-select" name="CivilStatus" id="inputGroupSelect07">
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Seperated">Seperated</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Highest Educational Attainment</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect08">Options</label>
                            <select class="form-select" name="EducationalAttainment" id="inputGroupSelect08">
                                <option value="No Grade Completed">No Grade Completed</option>
                                <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                <option value="Elementary Graduate">Elementary Graduate</option>
                                <option value="High School Undergraduate">High School Undergraduate</option>
                                <option value="High School Graduate">High School Graduate</option>
                                <option value="Senior High School Undergraduate">Senior High School Undergraduate</option>
                                <option value="Senior High School Graduate">Senior High School Graduate</option>
                                <option value="College Undergraduate">College Undergraduate</option>
                                <option value="College Graduate">College Graduate</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Occupation</label>
                        <input type="text" class="form-control" name="Occupation" id="Occupation" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Skill & Interest</label>
                        <input type="text" class="form-control" name="SkillInterest" id="SkillInterest" autocomplete="off">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update PYA Member</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View PYA Modal -->
<div class="modal fade" id="pyaViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View PYA Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Barangay</label>
                    <p class="form-control" id="view_Barangay"></p>
                </div>
                <div class="mb-3">
                    <label for="">Last Name</label>
                    <p class="form-control" id="view_LastName"></p>
                </div>
                <div class="mb-3">
                    <label for="">First Name</label>
                    <p class="form-control" id="view_FirstName"></p>
                </div>
                <div class="mb-3">
                    <label for="">Middle Name</label>
                    <p class="form-control" id="view_MiddleName"></p>
                </div>
                <div class="mb-3">
                    <label for="">Date of Birth</label>
                    <p class="form-control" id="view_DateOfBirth"></p>
                </div>
                <div class="mb-3">
                    <label for="">Age</label>
                    <p class="form-control" id="view_Age"></p>
                </div>
                <div class="mb-3">
                    <label for="">Sex</label>
                    <p class="form-control" id="view_Sex"></p>
                </div>
                <div class="mb-3">
                    <label for="">Civil Status</label>
                    <p class="form-control" id="view_CivilStatus"></p>
                </div>
                <div class="mb-3">
                    <label for="">Highest Educational Attainment</label>
                    <p class="form-control" id="view_EducationalAttainment"></p>
                </div>
                <div class="mb-3">
                    <label for="">Occupation</label>
                    <p class="form-control" id="view_Occupation"></p>
                </div>
                <div class="mb-3">
                    <label for="">Skill & Interest</label>
                    <p class="form-control" id="view_SkillInterest"></p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid g-0" id="pya-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" id="pya-header">
                </div>
                <div class="card-header">
                    <div class="input-group rounded mb-3">
                          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                              <span class="input-group-text border-0" id="search-addon">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                             </span>
                     </div>
                    <h4>
                    <span class="fw-normal fs-1 fw-normal text-uppercase">List of Pag-asa Youth Association Members</span>
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#pyaAddModal">
                            Add PYA Member
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="pyaTable" class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Barangay</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Date of Birth</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Civil Status</th>
                                <th>Highest Educational Attainment</th>
                                <th>Occupation</th>
                                <th>Skill & Interest</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'socialservices-config.php';

                            $query = "SELECT * FROM pya_form";
                            $query_run = mysqli_query($connect, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $pya)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $pya['ID'] ?></td>
                                        <td><?= $pya['Barangay'] ?></td>
                                        <td><?= $pya['LastName'] ?></td>
                                        <td><?= $pya['FirstName'] ?></td>
                                        <td><?= $pya['MiddleName'] ?></td>
                                        <td><?= $pya['DateOfBirth'] ?></td>
                                        <td><?= $pya['Age'] ?></td>
                                        <td><?= $pya['Sex'] ?></td>
                                        <td><?= $pya['CivilStatus'] ?></td>
                                        <td><?= $pya['EducationalAttainment'] ?></td>
                                        <td><?= $pya['Occupation'] ?></td>
                                        <td><?= $pya['SkillInterest'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$pya['ID'];?>" class="viewPYABtn btn btn-info btn-sm">View</button>
                                            <button type="button" value="<?=$pya['ID'];?>" class="editPYABtn btn btn-success btn-sm">Edit</button>
                                            <button type="button" value="<?=$pya['ID'];?>" class="deletePYABtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Date Picker -->
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
            $('#datepicker1').datepicker();
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script>
        $(document).on('submit', '#savePYA', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_PYA", true);

            $.ajax({
                type: "POST",
                url: "pya-code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);

                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#pyaAddModal').modal('hide');
                        $('#savePYA')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#pyaTable').load(location.href + " #pyaTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editPYABtn', function () {

            var pya_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "pya-code.php?pya_id=" + pya_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }
                    else if(res.status == 200){

                        $('#pya_idNum').val(res.data.ID);
                        $('#inputGroupSelect05').val(res.data.Barangay);
                        $('#LastName').val(res.data.LastName);
                        $('#FirstName').val(res.data.FirstName);
                        $('#MiddleName').val(res.data.MiddleName);
                        $('#txtbirthdate1').val(res.data.DateOfBirth);
                        $('#txtage1').val(res.data.Age);
                        $('#inputGroupSelect06').val(res.data.Sex);
                        $('#inputGroupSelect07').val(res.data.CivilStatus);
                        $('#inputGroupSelect08').val(res.data.EducationalAttainment);
                        $('#Occupation').val(res.data.Occupation);
                        $('#SkillInterest').val(res.data.SkillInterest);

                        $('#pyaEditModal').modal('show');
                    }
                }
            });
        });

        $(document).on('submit', '#updatePYA', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_PYA", true);

            $.ajax({
                type: "POST",
                url: "pya-code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#pyaEditModal').modal('hide');
                        $('#updatePYA')[0].reset();

                        $('#pyaTable').load(location.href + " #pyaTable");
                    }
                    else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewPYABtn', function () {

            var pya_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "pya-code.php?pya_id=" + pya_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#view_Barangay').text(res.data.Barangay);
                        $('#view_LastName').text(res.data.LastName);
                        $('#view_FirstName').text(res.data.FirstName);
                        $('#view_MiddleName').text(res.data.MiddleName);
                        $('#view_DateOfBirth').text(res.data.DateOfBirth);
                        $('#view_Age').text(res.data.Age);
                        $('#view_Sex').text(res.data.Sex);
                        $('#view_CivilStatus').text(res.data.CivilStatus);
                        $('#view_EducationalAttainment').text(res.data.EducationalAttainment);
                        $('#view_Occupation').text(res.data.Occupation);
                        $('#view_SkillInterest').text(res.data.SkillInterest);

                        $('#pyaViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deletePYABtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var pya_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "pya-code.php",
                    data: {
                        'delete_PYA': true,
                        'pya_id': pya_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#pyaTable').load(location.href + " #pyaTable");
                        }
                    }
                });
            }
        });

    </script>

</body>
</html>