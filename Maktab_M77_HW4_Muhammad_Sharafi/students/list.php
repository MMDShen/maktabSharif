<!DOCTYPE html>
<html>
    <head>
        <style>

            table{
                background-color:cadetblue;
                border-collapse: collapse;
                border-radius: 7% 3% 7% 3%;
            }
            th ,td{
                border:1px solid aliceblue;
                padding-left:8px;
                padding-right:11px;
                color:white;
                padding-top:5px;
                padding-bottom:5px;
                width:400px
            }
            th{
                padding-left:8px !important;
                text-align: left;
            }
            th:nth-child(odd), td:nth-child(odd){
                width:10px;
                text-align: center;
            }
            th:nth-child(1), td:nth-child(1){
                text-align: left;
            }
            .gol{
                width:580px;
            }
            select{
                margin-bottom: 10px;
                width:325px;
                padding-left: 10px;
                height:40px;
                border:none;
                background-color:cadetblue;
                color:azure;
                border-radius: 20% 0% 10% 0%;
            }
            input{
                float:right;
                border:none;
                border-radius: 20% 10% 30% 10%;
                background-color: darkslateblue;
                padding: 15px;
                color:white;
            }
        </style>
    </head>
    <body>
        <?php
        $json1=file_get_contents("people.json");
        $json2=file_get_contents("ppl2.json");
        $json3=file_get_contents("ppl3.json");
        $num=1;
            
            $datas =  json_decode($json2);//echo var_dump($datas);
        ?>
 <div style="display:flex;width:90%;position:relative;justify-content:center;flex-wrap:wrap">
        <div class="gol">
        <h1>Aero Space Academic's Students Data</h1>
    <form action="#" method="$_GET">
        <select class="selecty" name="go">
            <option name="age-des" value="age-des">age des</option>
            <option name="age-asc" value="age-asc">age asc</option>
            <option name="school" value="school">school</option>
        </select>
        <input type="submit" value="sort">
    </form><br>
        <table>
            <tr>
                <th>num</th>
                <th>Name</th>
                <th>Age</th>
                <th>School</th>
            </tr>
            <?php
            if(isset($_GET['go'])){
                if( $_GET['go']=="age-des")
                    $datas =  json_decode($json2);
                if( $_GET['go']=="age-asc"){
                    $datas = json_decode($json2);

                    //this below codes searched
                    $price = array_column($datas, 'age');
                    array_multisort($price, SORT_ASC, $datas);
                    /*var_dump($datas);*/}
                    // $datas =  json_decode($json1);
                if( $_GET['go']=="school")
                $datas =  json_decode($json3);
                }
                    
                foreach($datas as $data){ 
                echo "<tr><td>". $num++ ."</div></td>". "<td>".$data -> name."</td><th>".$data -> age."</td><td>".$data -> school."</td></tr>";} ?>
        </table>
        </div>
        <img src="spc.jpg" style="top:50px;border-radius:50px;height:300px;margin-top:50px;margin-left:10px">
 </div>
 
    </body>
</html>