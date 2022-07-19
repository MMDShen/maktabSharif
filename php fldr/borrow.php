<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php
    $ds = file_get_contents("data.json");
    $d  = json_decode($ds, true);
    if (isset($_GET['rpass'])) {
        $rname = $_GET['rnam'];
        $remail = $_GET['rmail'];
        $rpass = $_GET['rpass'];
        $rveri = $_GET['rpassver'];
        $k = array("name" => $rname, "pass" => $rpass);
    }
    if (isset($_GET['nam'])) {
        $name = $_GET['nam'];
        $pass = $_GET['pass'];
        $k = array("name" => $name, "pass" => $pass);
    }
    ?>
</head>

<body>
    <div style="gap:10px;width:100%;text-align:center;display:flex;flex-wrap:wrap;flex-direction:column;direction:rtl">
        <?php
        ?>
        <div class="d-flex flex-column" style="margin-bottom: 20px !important">
            <?php

            if (isset($rpass)) {
                if ($_GET['rpass'] == $_GET['rpassver']) {
                    $go = "document.location.href='tries/whole.php'";
                    echo "سلام " . $rname . "<div class=\"alert alert-success\" role=\"alert\" style=\"margin-top:10px;align-self:center\"> خوش آمدید </div>"
                        . "<div style=\"margin-top:10px\">" . "بیا که دوش به مستی سروش عالم غیب" .
                        "</div>" . "<div>" . "نوید داد که عام است فیض رحمت او" . "</div>";

                    array_push($d, $k);
                    $jsonData = json_encode($d);
                    file_put_contents('data.json', $jsonData);
                } else {
                    $go = "document.location.href='login.php'";
                    echo "سلام " . $rname . "<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top:10px;align-self:center\"> رمز یکسان نبود</div>"
                        . "<div style=\"margin-top:10px\">" . "زاهد ار رندیِ حافظ نکند فهم چه شد؟" .
                        "</div>" . "<div>" . "دیو بُگْریزَد از آن قوم که قرآن خوانند" . "</div>";
                }
            }
            //var_dump($jsonData);
            ?>
            <?php

            if (isset($pass))
                foreach ($d as $pele) {
                    if ($pele["name"] == $name && $pele["pass"] == $pass) {
                        $go = "document.location.href='tries/whole.php'";
                        echo "سلام " . $name . "<div class=\"alert alert-success\" role=\"alert\" style=\"margin-top:10px;align-self:center\"> خوش آمدید </div>"
                            . "<div style=\"margin-top:10px\">" . "بیا که دوش به مستی سروش عالم غیب" .
                            "</div>" . "<div>" . "نوید داد که عام است فیض رحمت او" . "</div>";
                            $_SESSION['naaam'] = $name[0];
                    } else {
                        $go = "document.location.href='login.php'";
                        echo "سلام " . $name . "<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top:10px;align-self:center\"> نام شما ثبت نشده است</div>"
                            . "<div style=\"margin-top:10px\">" . "زاهد ار رندیِ حافظ نکند فهم چه شد؟" .
                            "</div>" . "<div>" . "دیو بُگْریزَد از آن قوم که قرآن خوانند" . "</div>";
                    }
                }

            //var_dump($jsonData);
            //echo $name[0];

            ?>

            <button type="button" style="width:fit-content;align-self:center;margin-top:10px" onclick="<?php echo $go ?>">بفرمائید</button>


        </div>


    </div>
</body>

</html>