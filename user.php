    <?php
    include "dbconnect.php";

    session_start();
    if (!isset($_GET["userid"]) &&  !isset($_SESSION["user"])) {
        header("Location: signin.php", true, 303);
    } else {
        try {
            $userid =  $_GET["userid"];
            $stmt = $conn->prepare("SELECT * FROM user WHERE id = $userid ");
            $stmt->execute();
            $user = $stmt->fetchAll()[0];
        } catch (PDOException $e) {
            header("Location: signin.php", true, 303);
        } ?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="user.css" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <style>
                img {
                    max-width: 50%;
                    max-height: 50%;
                }
            </style>
        </head>

        <body>
            <div class="d-flex w-100 h-100">
                <div id="div1" class="d-flex w-25 flex-column text-center">
                    <p id="userid" style="display: none;"><?php echo $_SESSION["user"]["userid"] ?></p>
                    <p id="followingid" style="display: none;"><?php echo $userid ?></p>
                    <img src="img/logo.jpg" class="rounded-circle mx-auto mt-5" />
                    <h5 class="my-2"><?php echo $user['firstname'] . "  " . $user['lastname']; ?></h5>
                    <div class="d-flex justify-content-around px-5 mt-1 text-center">
                        <?php
                        $stmt = $conn->prepare("SELECT COUNT(*) FROM `post` WHERE userid = " . $userid);
                        $stmt->execute();
                        $postcount = $stmt->fetchAll()[0];
                        $stmt = $conn->prepare("SELECT COUNT(*) FROM `following` WHERE userid =  " . $userid);
                        $stmt->execute();
                        $followingcount = $stmt->fetchAll()[0];
                        $stmt = $conn->prepare("SELECT COUNT(*) FROM `following` WHERE followingid =  " . $userid);
                        $stmt->execute();
                        $followercount = $stmt->fetchAll()[0];

                        ?>
                        <div class="d-flex flex-column">
                            <p class="mb-0"><?php echo $postcount[0] ?></p>
                            <p>Posts</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0"><?php echo $followercount[0] ?></p>
                            <p>Followers</p>
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0"><?php echo $followingcount[0] ?></p>
                            <p>Following</p>
                        </div>
                    </div>
                    <?php if ($_SESSION["user"]["userid"] != $user["id"]) {
                        try {
                            $stmt = $conn->prepare("SELECT * FROM `following` WHERE `userid` = '" . $_SESSION["user"]["userid"] . "' AND `followingid` = '" . $userid . "'");
                            $stmt->execute();
                            if ($stmt->rowCount() >  0) {
                                echo '<button id="followbutton" class="w-50 mx-auto border-0" onclick="follow()">Follow</button><br>';
                            } else {
                                echo '<button id="followbutton" class="w-50 mx-auto border-0" onclick="follow()">Following</button><br>';
                            }
                        } catch (PDOException $e) {
                            // echo $sql . "<br>" . $e->getMessage();
                        }
                    } ?>
                    <a class="mt-4" style="font-size: 20px;" href="main.php">Return</a>
                </div>

                <div class="mx-3 w-100" style="border-radius: 0.8rem; overflow: scroll; max-height:100%;  overflow-x: hidden;">
                    <?php
                    $sql =  "SELECT * FROM `post` WHERE `userid` =" . $userid;

                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                        $stmt2 = $conn->prepare("SELECT * FROM `user` WHERE `id` = " . $v["userid"]);
                        $stmt2->execute();
                        foreach ($stmt2->fetchAll() as $k2 => $v2) {
                            $postfname = $v2["firstname"];
                            $postlname = $v2["lastname"];
                        }

                        echo '<div class="bgwhite mt-5" style="width: 540px; border-radius: 0.8rem; background-color: #f3f2ef;" >
                                  <div class="mt-3 d-flex">
                                      <img src="img/logo.jpg" class="rounded-circle m-3" style="width: 45px; height:45px;" />
                                      <div class="d-flex mt-3 m-0 flex-column">
                                          <h6 class="m-0">' . $postfname . ' ' . $postlname . '</h6>
                                          <span style="font-size: 12px;">Full Stack Dev</span>
                                      </div>
                                  </div>
                                  <div id="post"  class="px-3 pb-3" style="text-align: justify; overflow:auto;">' . $v["content"] . '</div>
                              </div>';
                    } ?>
                </div>

            </div>

        </body>

        <script>
            let followbutton = document.getElementById("followbutton");
            let userid = document.getElementById("userid");
            let followingid = document.getElementById("followingid");
            let formdata = new FormData();

            function setbuttondesign() {
                formdata = new FormData();
                formdata.append('userid', userid.innerHTML);
                formdata.append('followingid', followingid.innerHTML);
                if (followbutton.textContent == "Follow") {
                    followbutton.textContent = "Following";
                    followbutton.style.border = "1px solid black";
                    followbutton.style.backgroundColor = "white";
                    followbutton.style.color = "#0A66C2";
                    followbutton.style.letterSpacing = "0";

                    formdata.append('action', "follow");

                } else {
                    followbutton.textContent = "Follow";
                    followbutton.style.border = "0";
                    followbutton.style.backgroundColor = "#0A66C2";
                    followbutton.style.color = "white";
                    followbutton.style.letterSpacing = "1";

                    formdata.append('action', "unfollow");
                }
            }

            function follow() {
                setbuttondesign();

                $.ajax({
                    type: "POST",
                    url: "followuser.php",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    dataType: 'text',
                    success: function(data) {}
                }).done(function() {
                    window.location.reload();
                });
            }
            setbuttondesign();
        </script>

        </html>

    <?php } ?>