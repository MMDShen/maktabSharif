<!doctype html>
<html>

<head>
    <title>غزل ۲۲۸</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <div class="d-flex flex-column justify-content-between m-auto align-items-center w-75">
        <div>غزل شماره ۲۲۷</div>

        <?php
        $hafez = file_get_contents("ashaar.json");
        $a  = json_decode($hafez, true);
        for ($i = 0; $i < 8; $i++) {
        ?>
            <div class="d-flex flex-wrap-reverse justify-content-around m-2 w-100" style="margin-bottom: 20px !important">
                <div>
                    <?php
                    echo $a["ghazal"][$i]["m2"];
                    ?>
                </div>
                <div>
                    <?php
                    echo $a["ghazal"][$i]["m1"];
                    ?>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
    <div class="d-flex justify-content-center w-75 flex-wrap m-auto mt-3" style="direction:rtl">
        <h4 class="w-100" style="text-align: center">اگر حساب دارین لطفا از این طریق وارد شین</h4>

        <form action="borrow.php" method="$_GET" class="d-flex flex-column w-75 mt-4 " style="direction:ltr">

            <div class="d-flex justify-content-around flex-wrap w-100" style=>
                <input placeholder="username" type="text" class="" name="nam" required>
                <input placeholder="pass" type="password" class="" name="pass" required>
            </div>
            <input type="submit" value="Lets Go" class="mt-3">
        </form>
    </div>
    <div style="height:50px"></div>
    <div class="d-flex justify-content-center w-75 flex-wrap m-auto mt-3" style="direction:rtl">
        <h4 class="w-100" style="text-align: center">اگه که ندارین خب بسازین</h4>

        <form action="borrow.php" method="$_GET" class="d-flex flex-column w-75 mt-4 " style="direction:ltr">

            <div class="d-flex justify-content-around flex-wrap w-100" style=>
                <input placeholder="email" type="email" class="" name="rmail" required>
                <input placeholder="pass" type="password" class="" name="rpass" required>
            </div>
            <div class="d-flex justify-content-around flex-wrap w-100 mt-3" style=>
                <input placeholder="username" type="text" class="" name="rnam" required>
                <input placeholder="verify password" type="password" class="" name="rpassver" required>
            </div>
            <input type="submit" value="Lets Go" class="mt-3" >
        </form>
        <p id="gg" style="display:none">good</p>
    </div>
    <div style="height:200px"></div>




</body>

</html>