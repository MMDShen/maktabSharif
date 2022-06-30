<!DOCTYPE html>
<html>
    <head>
        <style>
            p{
                margin-top: 10px;
                margin-left: 10px;
            }
            .flexbox{
                display: flex;
                flex-wrap: wrap;
            }
            .header{
                height:150px;
                background-color: darkgrey;
                flex-basis:100%;
                
            }
            .article{
                height:400px;
                background-color: white;
                flex-basis:60%;
            }
            .aside{
                height:400px;
                background-color: lemonchiffon;
                flex-basis:20%;
            }
            .navbar{
                height:400px;
                background-color: greenyellow;
                flex-basis:20%;
            }
            .footer{
                height:150px;
                background-color: darkgrey;
                flex-basis:100%;
            }
        </style>
    </head>
    <body>
        <div class="flexbox">
            <div class="header"><p>Header</p></div>
            <div class="article"><p>Article</p></div>
            <div class="aside"><p>Aside</p></div>
            <div class="navbar"><p>Nav</p></div>
            <div class="footer"><p>Footer</p></div>
        </div>
    </body>
</html>