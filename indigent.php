<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSWDO - LingkodRekord</title>
    <!-- Bootstrap CSS -->
    <style>
        <?php require 'css/bootstrap.min.css' ?>
        <?php require 'indigent.css' ?>
    </style>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

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
            var n = (now - birthdate) / 1000;

            if (n < 604800) { // less than a week
                var day_n = Math.floor(n / 86400);
                if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')) {
                    // variable is undefined or null
                    return '';
                } else {
                    return day_n + ' Day' + (day_n > 1 ? 's' : '') + ' Old';
                }
            } else if (n < 2629743) { // less than a month
                var week_n = Math.floor(n / 604800);
                if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')) {
                    return '';
                } else {
                    return week_n + ' Week' + (week_n > 1 ? 's' : '') + ' Old';
                }
            } else if (n < 31562417) { // less than 24 months
                var month_n = Math.floor(n / 2629743);
                if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')) {
                    return '';
                } else {
                    return month_n + ' Month' + (month_n > 1 ? 's' : '') + ' Old';
                }
            } else {
                var year_n = Math.floor(n / 31556926);
                if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')) {
                    return year_n = '';
                } else {
                    return year_n + ' Year' + (year_n > 1 ? 's' : '') + ' Old';
                }
            }
        }

        function getAgeVal(pid) {
            var birthdate = formatDate(document.getElementById("txtbirthdate").value);
            var count = document.getElementById("txtbirthdate").value.length;

            if (count == '10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);

                if (res == '-' || res == '0') {
                    document.getElementById("txtbirthdate").value = "";
                    document.getElementById("txtage").value = "";
                    $('#txtbirthdate').focus();
                    return false;
                } else {
                    document.getElementById("txtage").value = age;
                }
            } else {
                document.getElementById("txtage").value = "";
                return false;
            }
        }

        function getAgeVal1(pid) {
            var birthdate = formatDate(document.getElementById("txtbirthdate1").value);
            var count = document.getElementById("txtbirthdate1").value.length;

            if (count == '10') {
                var age = getAge(birthdate);
                var str = age;
                var res = str.substring(0, 1);

                if (res == '-' || res == '0') {
                    document.getElementById("txtbirthdate1").value = "";
                    document.getElementById("txtage1").value = "";
                    $('#txtbirthdate1').focus();
                    return false;
                } else {
                    document.getElementById("txtage1").value = age;
                }
            } else {
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
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="20" height="20">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Edit Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="login.php">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- add Indigent Modal -->
    <div class="modal fade" id="indigentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Add Indigent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="saveIndigent">
                    <div class="modal-body">

                        <div class="alert alert-warning d-none" id="errorMessage"></div>

                        <div class="mb-3">
                            <label for="">SWD ID Number</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="SWD_ID" placeholder="SWD ID Number" aria-label="SWD_ID" aria-describedby="basic-addon1" autocomplete="off">
                            </div>
                        </div>

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
                            <label for="">Number of Dependents</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="NumOfDependents" placeholder="Number of Dependents" aria-label="NumOfDependents" aria-describedby="basic-addon1" autocomplete="off">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Member of Sectoral Group</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect05">Options</label>
                                <select class="form-select" name="MemberOfSecGroup" id="inputGroupSelect05">
                                    <option selected>Choose...</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Artisanal Fisherfolks">Artisanal Fisherfolks</option>
                                    <option value="Children">Children</option>
                                    <option value="Cooperative">Cooperative</option>
                                    <option value="Farmers and Landless Rural Workers">Farmers and Landless Rural Workers</option>
                                    <option value="Formal Labor and Migrant Workers">Formal Labor and Migrant Workers</option>
                                    <option value="Indigenous People">Indigenous People</option>
                                    <option value="Non-Government Organizations (NGOs)">Non-Government Organizations (NGOs)</option>
                                    <option value="Senior Citizens">Senior Citizens</option>
                                    <option value="Urban Poor">Urban Poor</option>
                                    <option value="Persons With Disabilities (PWD's)">Persons With Disabilities (PWD's)</option>
                                    <option value="Victims of Disaster and Calamities">Victims of Disaster and Calamities</option>
                                    <option value="Women">Women</option>
                                    <option value="Workers in the Informal Sector">Workers in the Informal Sector</option>
                                    <option value="Youth and Students">Youth and Students</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">SAP Recipient</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect06">Options</label>
                                <select class="form-select" name="SapRecipient" id="inputGroupSelect06">
                                    <option selected>Choose...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 1 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics1Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 1 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics1Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 2 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics2Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 2 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics2Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 3 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics3Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 3 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics3Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Date Given</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="DateGiven" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Type of Service Rendered</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect07">Options</label>
                                <select class="form-select" name="TypeOfServiceRendered" id="inputGroupSelect07">
                                    <option selected>Choose...</option>
                                    <option value="CIP">CIP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Indigent</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- edit Indigent Modal -->
    <div class="modal fade" id="indigentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Indigent</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="updateIndigent">
                    <div class="modal-body">

                        <div class="alert alert-warning d-none" id="errorMessageUpdate"></div>

                        <input type="hidden" name="indigent_id" id="indigent_id">

                        <div class="mb-3">
                            <label for="">SWD ID Number</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="SWD_ID" id="SWD_ID" placeholder="SWD ID Number" aria-label="SWD_ID" aria-describedby="basic-addon1" autocomplete="off">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Barangay</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect08">Options</label>
                                <select class="form-select" name="Barangay" id="inputGroupSelect08">
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
                                <label class="input-group-text" for="inputGroupSelect09">Options</label>
                                <select class="form-select" name="Sex" id="inputGroupSelect09">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Civil Status</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect010">Options</label>
                                <select class="form-select" name="CivilStatus" id="inputGroupSelect010">
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
                                <label class="input-group-text" for="inputGroupSelect011">Options</label>
                                <select class="form-select" name="EducationalAttainment" id="inputGroupSelect011">
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
                            <label for="">Number of Dependents</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="NumOfDependents" name="NumOfDependents" id="NumOfDependents" placeholder="Number of Dependents" aria-label="NumOfDependents" aria-describedby="basic-addon1" autocomplete="off">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Member of Sectoral Group</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect012">Options</label>
                                <select class="form-select" name="MemberOfSecGroup" id="inputGroupSelect012">
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Artisanal Fisherfolks">Artisanal Fisherfolks</option>
                                    <option value="Children">Children</option>
                                    <option value="Cooperative">Cooperative</option>
                                    <option value="Farmers and Landless Rural Workers">Farmers and Landless Rural Workers</option>
                                    <option value="Formal Labor and Migrant Workers">Formal Labor and Migrant Workers</option>
                                    <option value="Indigenous People">Indigenous People</option>
                                    <option value="Non-Government Organizations (NGOs)">Non-Government Organizations (NGOs)</option>
                                    <option value="Senior Citizens">Senior Citizens</option>
                                    <option value="Urban Poor">Urban Poor</option>
                                    <option value="Persons With Disabilities (PWD's)">Persons With Disabilities (PWD's)</option>
                                    <option value="Victims of Disaster and Calamities">Victims of Disaster and Calamities</option>
                                    <option value="Women">Women</option>
                                    <option value="Workers in the Informal Sector">Workers in the Informal Sector</option>
                                    <option value="Youth and Students">Youth and Students</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">SAP Recipient</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect013">Options</label>
                                <select class="form-select" name="SapRecipient" id="inputGroupSelect013">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 1 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics1Amount" id="Aics1Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 1 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics1Date" id="Aics1Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 2 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics2Amount" id="Aics2Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 2 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics2Date" id="Aics2Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 3 - Amount</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">₱</span>
                                <input type="text" class="form-control" name="Aics3Amount" id="Aics3Amount" aria-label="Amount (to the nearest peso)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">AICS 3 - Date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="Aics3Date" id="Aics3Date" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Date Given</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control" name="DateGiven" id="DateGiven" placeholder="mm/dd/yyyy" autocomplete="off">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Type of Service Rendered</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect014">Options</label>
                                <select class="form-select" name="TypeOfServiceRendered" id="inputGroupSelect014">
                                    <option value="CIP">CIP</option>
                                    <option value="Hihe">Hihe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Indigent</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- view Indigent Modal -->
    <div class="modal fade" id="indigentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Indigent</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">SWD ID Number</label>
                        <p class="form-control" id="view_SWD_ID"></p>
                    </div>
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
                        <label for="">Number of Dependents</label>
                        <p class="form-control" id="view_NumOfDependents"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Member of Sectoral Group</label>
                        <p class="form-control" id="view_MemberOfSecGroup"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">SAP Recipient</label>
                        <p class="form-control" id="view_SapRecipient"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 1 - Amount</label>
                        <p class="form-control" id="view_Aics1Amount"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 1 - Date</label>
                        <p class="form-control" id="view_Aics1Date"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 2 - Amount</label>
                        <p class="form-control" id="view_Aics2Amount"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 2 - Date</label>
                        <p class="form-control" id="view_Aics2Date"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 3 - Amount</label>
                        <p class="form-control" id="view_Aics3Amount"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">AICS 3 - Date</label>
                        <p class="form-control" id="view_Aics3Date"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Date Given</label>
                        <p class="form-control" id="view_DateGiven"></p>
                    </div>
                    <div class="mb-3">
                        <label for="">Type Of Service Rendered</label>
                        <p class="form-control" id="view_TypeOfServiceRendered"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="idk" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0.5, 0, 0, 0.9)) ,url(asset/indigent-bg.jpg)">
        <div class="container-md-12 g-0">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card Header -->
                        <div class="card-header">
                            <div class="container">
                                <div class="d-flex justify-content-center" id ="clg-logo">
                                    <img src="asset/clg-seal.png"  class="img-fluid">
                                    <img src="asset/dswd-logo.png"  class="img-fluid " height="450" width="450">
                                </div>
                                <h2 class ="d-flex justify-content-center mt-2 fw-bold"> MSWDO LingkodRekord </h2>
                                <!--
                                <h3 class="d-flex justify-content-center align-items-center">Municipal Social Welfare Development Office</h2>
                                <h5 class="d-flex justify-content-center">Region: CALABARZON</h4>
                                <h5 class="d-flex justify-content-center">Province: Quezon</h4>
                                <h5 class="d-flex justify-content-center">Municipality: Calauag</h4>
                                -->
                                <div id="content">
                                    <form class='form-inline'>
                                        <div class="input-group">
                                            <input type='text' id='search' class="form-control search-form" placeholder="Search Indigent Member">
                                            <span class="input-group-btn" style="width:39px">
                                                <button id="search-this" type="button" class="pull-right btn btn-default search-btn">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- Button trigger modal -->
                                    <div class="buttons d-flex justify-content-center mt-3">
                                        <button class="btn btn-primary" type="button">
                                            Show All Data
                                        </button>
                                        <button class="btn btn-primary ms-2 me-2" type="button" data-toggle="dropdown">
                                             Filter
                                            <i class="fa fa-filter" aria-hidden="true"></i>
                                        </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-sort="LastName" href="#">Sort By Last Name</a></li>
                                                <li><a class="dropdown-item" data-sort="Barangay" href="#">Sort By Barangay</a></li>
                                                <li><a class="dropdown-item" data-sort="Age" href="#">Sort By Age</a></li>
                                                <li><a class="dropdown-item" data-sort="Sex" href="#">Sort By Sex</a></li>
                                            </ul>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#indigentAddModal">
                                            Add Indigent
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="card-body" style="display:none" id="main-table">
                            <table id="indigentTable" class="table table-striped">
                                <thead class="table">
                                    <tr>
                                        <th>Action</th>
                                        <th>ID</th>
                                        <th>SWD ID</th>
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
                                        <th>Number of Dependents</th>
                                        <th>Member of Sectoral Group</th>
                                        <th>SAP Recipient</th>
                                        <th>AICS 1 - Amount</th>
                                        <th>AICS 1 - Date</th>
                                        <th>AICS 2 - Amount</th>
                                        <th>AICS 2 - Date</th>
                                        <th>AICS 3 - Amount</th>
                                        <th>AICS 3 - Date</th>
                                        <th>Date Given</th>
                                        <th>Type of Service Rendered</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    require 'indigent-config.php';

                                    $query = "SELECT * FROM indigent_form";
                                    $query_run = mysqli_query($connect, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $indigent) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <button type="button" value="<?= $indigent['ID']; ?>" class="viewIndigentBtn btn btn-info btn-sm mb-2">View</button>
                                                    <button type="button" value="<?= $indigent['ID']; ?>" class="editIndigentBtn btn btn-success btn-sm mb-2">Edit</button>
                                                    <button type="button" value="<?= $indigent['ID']; ?>" class="deleteIndigentBtn btn btn-danger btn-sm mb-2">Delete</button>
                                                </td>
                                                <td><?= $indigent['ID'] ?></td>
                                                <td><?= $indigent['SWD_ID'] ?></td>
                                                <td><?= $indigent['Barangay'] ?></td>
                                                <td><?= $indigent['LastName'] ?></td>
                                                <td><?= $indigent['FirstName'] ?></td>
                                                <td><?= $indigent['MiddleName'] ?></td>
                                                <td><?= $indigent['DateOfBirth'] ?></td>
                                                <td><?= $indigent['Age'] ?></td>
                                                <td><?= $indigent['Sex'] ?></td>
                                                <td><?= $indigent['CivilStatus'] ?></td>
                                                <td><?= $indigent['EducationalAttainment'] ?></td>
                                                <td><?= $indigent['Occupation'] ?></td>
                                                <td><?= $indigent['NumOfDependents'] ?></td>
                                                <td><?= $indigent['MemberOfSecGroup'] ?></td>
                                                <td><?= $indigent['SapRecipient'] ?></td>
                                                <td><?= $indigent['Aics1Amount'] ?></td>
                                                <td><?= $indigent['Aics1Date'] ?></td>
                                                <td><?= $indigent['Aics2Amount'] ?></td>
                                                <td><?= $indigent['Aics2Date'] ?></td>
                                                <td><?= $indigent['Aics3Amount'] ?></td>
                                                <td><?= $indigent['Aics3Date'] ?></td>
                                                <td><?= $indigent['DateGiven'] ?></td>
                                                <td><?= $indigent['TypeOfServiceRendered'] ?></td>


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
    </div>
    <!-- Footer -->
    <div class="container-fluid g-0">
        <footer class="border-top text-center text-lg-start text-dark" style="background-color: #f1f1f1">
            <div class="text-center text-md-start">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-5 col-xl-4 mx-auto ">
                        <!-- Content -->
                        <h6 class="text-uppercase text-dark fw-bold mt-2">Municipal Social Welfare and Development Office - Calauag</h6>
                        <hr class="mt-0 d-inline-block mx-auto" style="width: 280px; border-bottom: 2px solid #f0a20e" />
                        <p class= "text-dark">To develop, implement and coordinate social protection and poverty reduction solutions for and with the poor, vulnerable and disadvantaged. </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 ">
                        <h6 class="text-uppercase text-dark fw-bold mt-2">Contact</h6>
                        <hr class="mt-0 d-inline-block mx-auto" style="width: 100px; border-bottom: 2px solid #f0a20e;" />
                        <p class="text-dark"><i class="fa fa-phone text-dark mr-3"></i> 09190907878 </p>
                    </div>
                    <!-- Copyright -->
                    <div class="text-center text-dark py-3" style="background-color: rgba(0, 0, 0, 0.2)">
                        © 2022 Copyright:
                        <span class="text-dark">MSWDO - LingkodRekord</span>
                    </div>
                    <!-- Copyright -->
                </div>
            </div>
        </footer>
    </div>

    <!-- Date Picker -->
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
            $('#datepicker1').datepicker();
        });
    </script>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script>
        $(document).on('submit', '#saveIndigent', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append("save_Indigent", true);

            $.ajax({
                type: "POST",
                url: "indigent-code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var res = jQuery.parseJSON(response);

                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);
                    } else if (res.status == 200) {
                        $('#errorMessage').addClass('d-none');
                        $('#indigentAddModal').modal('hide');
                        $('#saveIndigent')[0].reset();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $('#indigentTable').load(location.href + " #indigentTable");
                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });
        });

        $(document).on('click', '.editIndigentBtn', function() {

            var indigent_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "indigent-code.php?indigent_id=" + indigent_id,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {
                        $('#SWD_ID').val(res.data.SWD_ID);
                        $('#inputGroupSelect08').val(res.data.Barangay);
                        $('#LastName').val(res.data.LastName);
                        $('#FirstName').val(res.data.FirstName);
                        $('#MiddleName').val(res.data.MiddleName);
                        $('#txtbirthdate1').val(res.data.DateOfBirth);
                        $('#txtage1').val(res.data.Age);
                        $('#inputGroupSelect09').val(res.data.Sex);
                        $('#inputGroupSelect010').val(res.data.CivilStatus);
                        $('#inputGroupSelect011').val(res.data.EducationalAttainment);
                        $('#Occupation').val(res.data.Occupation);
                        $('#NumOfDependents').val(res.data.NumOfDependents);
                        $('#inputGroupSelect012').val(res.data.MemberOfSecGroup);
                        $('#inputGroupSelect013').val(res.data.SapRecipient);
                        $('#Aics1Amount').val(res.data.Aics1Amount);
                        $('#Aics1Date').val(res.data.Aics1Date);
                        $('#Aics2Amount').val(res.data.Aics2Amount);
                        $('#Aics2Date').val(res.data.Aics2Date);
                        $('#Aics3Amount').val(res.data.Aics3Amount);
                        $('#Aics3Date').val(res.data.Aics3Date);
                        $('#DateGiven').val(res.data.DateGiven);
                        $('#inputGroupSelect014').val(res.data.TypeOfServiceRendered);

                        $('#indigentEditModal').modal('show');
                    }
                }
            });
        });

        $(document).on('submit', '#updateIndigent', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_Indigent", true);

            $.ajax({
                type: "POST",
                url: "indigent-code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');
                        $('#indigentEditModal').modal('hide');
                        $('#updateIndigent')[0].reset();

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $('#indigentTable').load(location.href + " #indigentTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });
        });

        $(document).on('click', '.viewIndigentBtn', function() {

            var indigent_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "indigent-code.php?indigent_id=" + indigent_id,
                success: function(response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {
                        $('#view_SWD_ID').text(res.data.SWD_ID);
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
                        $('#view_NumOfDependents').text(res.data.NumOfDependents);
                        $('#view_MemberOfSecGroup').text(res.data.MemberOfSecGroup);
                        $('#view_SapRecipient').text(res.data.SapRecipient);
                        $('#view_Aics1Amount').text(res.data.Aics1Amount);
                        $('#view_Aics1Date').text(res.data.Aics1Date);
                        $('#view_Aics2Amount').text(res.data.Aics2Amount);
                        $('#view_Aics2Date').text(res.data.Aics2Date);
                        $('#view_Aics3Amount').text(res.data.Aics3Amount);
                        $('#view_Aics3Date').text(res.data.Aics3Date);
                        $('#view_DateGiven').text(res.data.DateGiven);
                        $('#view_TypeOfServiceRendered').text(res.data.TypeOfServiceRendered);

                        $('#indigentViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteIndigentBtn', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this data?')) {
                var indigent_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "indigent-code.php",
                    data: {
                        'delete_Indigent': true,
                        'indigent_id': indigent_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(res.message);

                            $('#indigentTable').load(location.href + " #indigentTable");
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>