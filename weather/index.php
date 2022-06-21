<!DOCTYPE html>
<html>
<head>

    <style>
        #ruz{
            margin-left:10px;
        }
    </style>


<title>Pick a Day</title>

</head>



<body>
    <h1>How's Your Weather?</h1>
    <p>Please enter your information</p>

    <form action="go.php" method="$_GET">
        
            <label for="city">City:</label>
            <input id="city" name="city" type="text" placeholder="Tehran" required>

            <label for="month">Month:</label>
            <input id="month" name="month" type="text" placeholder="Bahman" required>

            <label for="Year">Year:</label>
            <input id="year" name="year" type="text" placeholder="1400" required>

            <p>please choose the kinds of weather...</p>


            <input type="checkbox" id="sunshine" name="weather[]" value="Sunshine">
            <label for="sunshine">Sunshine</label><br>

            <input type="checkbox" id="clouds" name="weather[]" value="Clouds">
            <label for="clouds">Clouds</label><br>

            <input type="checkbox" id="rain" name="weather[]" value="Rain">
            <label for="rain">Rain</label><br><br>
            <input type="submit" value="Go">

    </form>
    <br>



</body>

</html>
