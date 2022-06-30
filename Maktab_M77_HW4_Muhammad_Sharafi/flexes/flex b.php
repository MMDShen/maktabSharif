<!DOCTYPE html>
<html>
    <head>
        <style>
            p{
                margin-top: 10px;
                margin-left: 10px;
            }
            .moaf{
                display: flex;
                flex-wrap: wrap;
            }
            .flexbox1{
                display: inline-flex;
                width:10%;
            }
            .flexbox2{
                display: inline-flex;
                width:89%;
                height: 500px;
                flex-wrap: wrap;
            }
            .flexbox3{
                display: inline-flex;
                flex-wrap: wrap;
                flex-direction: column;
                width:89%;
                height:400px;
            }
            .header{
                height:500px;
                background-color:chocolate;
                flex-grow: 1;
                
            }
            .article{
                background-color:chartreuse;
                width:100%;
                height:100px
            }
            .aside{
                height:400px;
                background-color:ghostwhite;
                height: 300px;
            }
            .navbar{
                height:400px;
                background-color:chartreuse;
                height: 100px;
            }
            .footer{
                height:400px;
                background-color:chocolate;
                width:11%;
            }

        </style>
    </head>
    <body>
      <div class="moaf">
        <div class="flexbox1">
            <div class="header"><p>Nav</p></div>
        </div>
        <div class="flexbox2">
            <div class="article"><p>Header</p></div>
            <div class="flexbox3">
                <div class="aside"><p>Article</p></div>
                <div class="navbar"><p>Footer</p></div>
            </div>
            <div class="footer"><p>Aside</p></div>
        </div>
      </div>
        
        
        
    </body>
</html>