<?php
    require 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="plugins/validation/dist/jquery.validate.min.js"></script>

</head>

<body>
    <div>
        <header>
            <svg class="mx-5 my-4" width="102" height="26" viewBox="0 0 102 26">
                <path d="M13 10H17V22H13V10ZM15 3.8C14.5671 3.80984 14.1468 3.94718 13.7917 4.19483C13.4365 4.44247 13.1623 4.7894 13.0035 5.19217C12.8446 5.59493 12.8081 6.03562 12.8985 6.45903C12.989 6.88244 13.2024 7.26975 13.5119 7.57245C13.8215 7.87514 14.2135 8.07976 14.6389 8.16067C15.0642 8.24159 15.504 8.1952 15.903 8.02732C16.3021 7.85943 16.6428 7.57752 16.8824 7.2169C17.122 6.85627 17.2499 6.43297 17.25 6C17.2515 5.70645 17.1939 5.4156 17.0807 5.14474C16.9675 4.87388 16.801 4.62854 16.5911 4.42331C16.3812 4.21808 16.1322 4.05714 15.8589 3.95006C15.5855 3.84299 15.2934 3.79195 15 3.8ZM4 4H0V22H11V18H4V4ZM57.9 16.2C57.9 16.61 57.9 16.86 57.9 17H48.9C48.9021 17.169 48.9256 17.337 48.97 17.5C49.1765 18.0933 49.5745 18.6011 50.1014 18.9433C50.6282 19.2855 51.254 19.4427 51.88 19.39C52.4142 19.4129 52.9468 19.3171 53.4396 19.1096C53.9324 18.9021 54.3731 18.5881 54.73 18.19L57.45 19.87C56.7533 20.6812 55.88 21.322 54.8971 21.7433C53.9142 22.1645 52.8479 22.3549 51.78 22.3C48.19 22.3 45.12 20.25 45.12 16.11C45.091 15.2506 45.2411 14.3946 45.5608 13.5963C45.8804 12.798 46.3626 12.075 46.9767 11.4731C47.5908 10.8712 48.3234 10.4037 49.128 10.1001C49.9325 9.7966 50.7914 9.66374 51.65 9.71C55.08 9.71 57.9 12 57.9 16.2ZM54.15 14.69C54.16 14.3669 54.0997 14.0455 53.9731 13.748C53.8466 13.4506 53.6569 13.1842 53.4172 12.9673C53.1775 12.7504 52.8935 12.5883 52.5849 12.492C52.2763 12.3958 51.9505 12.3678 51.63 12.41C50.9638 12.3515 50.3013 12.558 49.7865 12.9849C49.2716 13.4118 48.9459 14.0245 48.88 14.69H54.15ZM68 4H72V22H68.61V20.57C68.1486 21.1444 67.5541 21.5977 66.878 21.8904C66.2019 22.1832 65.4646 22.3066 64.73 22.25C62.22 22.25 59.18 20.39 59.18 16C59.18 12.08 61.87 9.75 64.68 9.75C65.299 9.72159 65.9167 9.82856 66.4902 10.0634C67.0636 10.2983 67.5788 10.6555 68 11.11V4ZM68.3 16C68.3 14.12 67.13 12.87 65.64 12.87C65.2366 12.8697 64.8373 12.9508 64.466 13.1084C64.0946 13.266 63.7589 13.4969 63.4788 13.7872C63.1988 14.0775 62.9801 14.4214 62.836 14.7981C62.6919 15.1749 62.6252 15.5769 62.64 15.98C62.6279 16.3815 62.6966 16.7813 62.842 17.1557C62.9874 17.5301 63.2064 17.8716 63.4862 18.1597C63.766 18.4479 64.1008 18.677 64.4708 18.8333C64.8407 18.9897 65.2383 19.0702 65.64 19.07C66.0201 19.0542 66.393 18.9609 66.7357 18.7957C67.0785 18.6305 67.3838 18.3969 67.6329 18.1094C67.8821 17.8219 68.0698 17.4864 68.1845 17.1236C68.2992 16.7609 68.3385 16.3785 68.3 16ZM45.76 10H41L37.07 14.9H37V4H33V22H37V16.27H37.07L41.07 22H46L41 15.48L45.76 10ZM26.53 9.7C25.7825 9.68818 25.0441 9.8653 24.3833 10.2149C23.7226 10.5645 23.1607 11.0754 22.75 11.7H22.7V10H19V22H23V15.47C22.956 15.1525 22.9801 14.8292 23.0706 14.5216C23.1611 14.2141 23.316 13.9294 23.525 13.6863C23.7341 13.4432 23.9924 13.2474 24.2829 13.1118C24.5734 12.9763 24.8894 12.9041 25.21 12.9C26.31 12.9 27 13.49 27 15.42V22H31V14.56C31 10.91 28.71 9.7 26.53 9.7ZM102 2V24C102 24.5304 101.789 25.0391 101.414 25.4142C101.039 25.7893 100.53 26 100 26H78C77.4696 26 76.9609 25.7893 76.5858 25.4142C76.2107 25.0391 76 24.5304 76 24V2C76 1.46957 76.2107 0.960859 76.5858 0.585786C76.9609 0.210714 77.4696 0 78 0L100 0C100.53 0 101.039 0.210714 101.414 0.585786C101.789 0.960859 102 1.46957 102 2ZM84 10H80V22H84V10ZM84.25 6C84.2599 5.553 84.1365 5.11317 83.8954 4.73664C83.6542 4.36011 83.3064 4.06396 82.8962 3.88597C82.4861 3.70798 82.0322 3.65622 81.5925 3.73731C81.1528 3.8184 80.7472 4.02865 80.4275 4.34124C80.1079 4.65382 79.8885 5.05456 79.7976 5.49233C79.7066 5.9301 79.7482 6.38503 79.9169 6.79909C80.0856 7.21314 80.3739 7.56754 80.7449 7.81706C81.1159 8.06657 81.5529 8.19989 82 8.2C82.2934 8.20805 82.5855 8.15701 82.8588 8.04994C83.1322 7.94286 83.3812 7.78192 83.5911 7.57669C83.801 7.37146 83.9675 7.12612 84.0807 6.85526C84.1939 6.5844 84.2514 6.29355 84.25 6ZM98 14.56C98 10.91 95.71 9.66 93.53 9.66C92.7782 9.65542 92.0375 9.84096 91.3766 10.1994C90.7158 10.5578 90.1562 11.0774 89.75 11.71V10H86V22H90V15.47C89.956 15.1525 89.9801 14.8292 90.0706 14.5216C90.1611 14.2141 90.316 13.9294 90.525 13.6863C90.7341 13.4432 90.9924 13.2474 91.2829 13.1118C91.5734 12.9763 91.8894 12.9041 92.21 12.9C93.31 12.9 94 13.49 94 15.42V22H98V14.56Z" fill="#0A66C2"></path>
            </svg>
        </header>

        <main class="w-100" style="height: calc(100vh - 100px);">
            <div class="d-flex justify-content-center align-content-center flex-column bg-transparent h-100">
                <div style="margin: auto;" class="bg-white">
                    <div id="formdiv" class="d-flex justify-content-center align-content-center flex-column px-4">
                        <form id="form" method="get" class="flex-column" onsubmit="submitfunc()" action="index.php">
                            <input type="hidden" name="page" value="signup" />
                            <div class="d-flex flex-column w-100 px-3 mt-3">
                                <p class="my-1">Email</p>
                                <input id="mail" name="mail" type="text" required="required" class="py-2 h-100 w-100 input" />
                            </div>

                            <div class="d-flex flex-column w-100 px-3 mt-1">
                                <p class="mb-1">Password</p>
                                <div class="d-flex input py-1 border-0">
                                    <input minlength="6" id="pass" name="pass" type="password" required="required" class="py-1 h-100 w-100 input" />
                                    <p onclick="showpass()" id="showpass" class="mb-0 px-3 user-select-none d-inline">
                                        show</p>
                                </div>
                                <label id="pass-error" class="error" for="pass"></label>
                            </div>

                            <div class="d-flex px-3 w-100">
                                <div class=" d-flex flex-column w10">
                                    <p class="my-1">Age</p>
                                    <input name="age" class="w-100 text-center input" type="number" min="5" max="200" required="required" />
                                </div>
                                <label id="age-error" class="error mt-5 ps-3" for="age"></label>
                            </div>

                            <div class="d-flex flex-column w-100 px-3">
                                <p class="my-1">Firstname</p>
                                <input id="fname" name="fname" class="py-2 input w-100" type="text" />
                            </div>

                            <div class="d-flex flex-column w-100 px-3">
                                <p class="my-1">Lastname</p>
                                <input id="lname" name="lname" class="py-2 input w-100" type="text" required="required" />
                            </div>

                            <p class="my-1 ps-3">Gender</p>
                            <div class="mb-1 mx-3 d-flex w-100">
                                <input id="male" name="gender" type="radio" required="required" value="Male">
                                <label for="male" class="ps-1 pe-4">Male</label>
                                <input id="female" name="gender" type="radio" required="required" value="Female">
                                <label for="female" class="ps-1">Female</label><br>
                                <label id="gender-error" class="error ps-3" for="gender"></label>
                            </div>

                            <div>
                                <div>
                                    <label for="select-country" class="pt-2 ps-3">Country</label>
                                    <div class="me-5">
                                        <select name="country" class="mt-1 mx-3 py-1 input form-control" id="selectcountry" data-live-search="true" style="size: 1;" onchange="<?php echo 'myau' ?>">
                                            <?php
                                            try {
                                                $stmt = $conn->prepare("SELECT * FROM `countries`");
                                                $stmt->execute();
                                                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                foreach ($stmt->fetchAll() as $k => $v) {
                                                    echo "<option data-tokens=" . $v['name'] . ">" . $v['name'] . "</option>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <label for="select-country" class="mt-2 ps-3">City</label>
                                    <div class="me-5">
                                        <select name="city" class="mt-1 mx-3 py-1 input form-control" id="selectcity" data-live-search="true" style="size: 1;">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input class="py-2 text-light mx-2 my-4 m-auto w-100" type="submit" value="Agree & Join" />
                    </div>
                    </form>

                    <div class="d-flex mx-3">
                        <hr class="w-50 ms-4" />
                        <p class="px-4">or</p>
                        <hr class="w-50 me-4" />
                    </div>

                    <div class="d-flex w-100 mx-auto" style="font-size: 18px;">
                        <div class="d-flex m-auto">
                            <p class="pb-3">Already on LinkedIn? </p>
                            <a id="joinnow" class="py-1 px-2" href="index.php?page=signin">Sign in</a>
                        </div>
                    </div>
                </div>


            </div>
        </main>
    </div>

    <script>
        jQuery.validator.addMethod("checkname", function(value, element) {
            return this.optional(element) || /^[A-Z;a-z]{3,}$/.test(value);
        }, "Please specify correct name");

        jQuery.validator.addMethod("checkpass", function(value, element) {
            if (this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/.test(value) && value != "") {
                let showpass = document.getElementById("showpass");
                showpass.className.includes("error") ? showpass.className = showpass.className.replace("error", "") : "";
                return true;
            } else {
                let element = document.getElementById("showpass");
                element.className.includes("error") ? element.className.replace("error", "error") :
                    element.className += " error";
                return false;
            }
            return true;
        }, "Password must contain lower, upper, numeric and special character");

        function submitfunc() {
            let element = document.getElementById("showpass");
            if (pass.value == "") {
                element.className.includes("error") ? element.className.replace("error", "error") :
                    element.className += " error";
            }
        }

        $(() => {
            $("#form").validate({
                rules: {
                    fname: {
                        required: true,
                        checkname: true
                    },
                    lname: {
                        checkname: true
                    },
                    pass: {
                        checkpass: true
                    }
                }
            })
        })

        function showpass() {
            console.log("clicked");
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        selectcountry = document.getElementById('selectcountry');
        selectcity = document.getElementById('selectcity');
        selectcountry.selectedIndex = 1;
        $.ajax({
            type: "POST",
            url: "getcities.php",
            data: {
                country: selectcountry.value
            },
            dataType: 'json',
            success: function(res) {
                selectcity.innerHTML = '';
                Object.values(res).map(function(city) {
                    opt = document.createElement('option');
                    opt.text = city['name'];
                    selectcity.appendChild(opt);
                })
            }
        });
        selectcity.selectedIndex = 2;
        $('#selectcountry').change(function() {
            console.log(selectcountry.value);
            $.ajax({
                type: "POST",
                url: "getcities.php",
                data: {
                    country: selectcountry.value
                },
                dataType: 'json',
                success: function(res) {
                    selectcity.innerHTML = '';
                    Object.values(res).map(function(city) {
                        console.log(city['name']);
                        opt = document.createElement('option');
                        opt.text = city['name'];
                        selectcity.appendChild(opt);
                    })
                }
            });
            selectcity.selectedIndex = 2;

        });
    </script>





    </div>
</body>



</html>