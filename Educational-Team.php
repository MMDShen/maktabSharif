<!doctype html>
<html>
    <head>
        <!--tamrin sevvom, Besmellah-->
        <title>HW3 Primary</title>
        <style>
            table{
                position: absolute;
                right:33%;
                top:40%;
                font-size: 12px;
                border-collapse: collapse;
                box-shadow: 0px 8px 12px -2px  olive;
            }
            th{
                padding-left:6px;
            }
            th.righty{
                width: 200px;
                height:26px;
                text-align:left;

            }
            th.lefty{
                width: 400px;
                text-align:left;

            }
            tr:first-child{
                background-color: blue !important;
                color:white !important;
            }
            tr:nth-child(even){
                background-color: white ;
            }
            tr:nth-child(odd){
                background-color:gainsboro;
                color:blue;
            }
            tr:last-child{
                border-bottom:blue 2px solid;
            }

        </style>
    </head>
    <!-- styled background -->
    <body style="background-color:wheat">

    <!-- have shadow  -->
        <table>
            <tr>
                <th class="lefty">
                    Name
                </th>
                <th class="righty">
                    role
                </th>
            </tr>
            <tr>
                <th class="lefty">
                    Ehsan Kashfi
                </th>
                <th class="righty">
                    Teacher
                </th>
            </tr>
            <tr>
                <th class="lefty">
                    Mostafa Sadeghi
                </th>
                <th class="righty">
                    Mentor
                </th>
            </tr>
            <tr>
                <th class="lefty">
                    Muhammad Shabani
                </th>
                <th class="righty">
                    Mentor
                </th>
            </tr>
            <tr>
                <th class="lefty">
                    Sajjad Shahrabi
                </th>
                <th class="righty">
                    Mentor 
                </th>
            </tr>
            <tr>
                <th class="lefty">
                    Yones Sohrabi
                </th>
                <th class="righty">
                    Mentor 
                </th>
            </tr>

        </table>
    </body>
</html>