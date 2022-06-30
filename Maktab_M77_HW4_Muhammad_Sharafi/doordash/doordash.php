<!DOCTYPE html>
<!-- in noskhe bi estefade az bootstrap hast -->
<!-- responsive nist -->
<!-- joziiat anchenani nadare -->
<!-- darsi ke gereftam:1. bayad baraye code khub hatman az bootstrap va moshabehesh estefadeh konam. 2. svg ro kashf kardam. 3. search kardam va fahmidam chetore dokme ro tuye input bekesham -->
<!-- aghebat be kheir / Ya Ali -->

<!-- +-180 lines of code-->
<!-- source: https://www.doordash.com/ -->
<html>
    <head>
        <style>
            body{
                margin:0px;
            }
            .bg{
                width:100%;
                height:575px;
                content: url("img/header.jpg");
                /* clip-path: inset(0px 0px 60px 0px); */
                object-fit: cover;
            }
            .flexy{
                display:flex;
                direction: rtl;
                align-items: center;
                height:72px;

            }
            .flexy>*{
                margin-right:10px;
                font-size: 18px;
                font-weight:400;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin-right:20px;

            }
            .flexy>button{
                background-color: white;
                border-radius: 50px;
                border:none;
                padding:10px 18px;

            }
            svg{
                margin-left:15px;

            }
            svg>path{
                fill:white;
                
            }
            .flexy2{
                display: flex;
                box-sizing: border-box;
                margin-top: 120px;
                justify-content:center; 
                gap:10%;
                flex-direction: row;
                flex-wrap: wrap;
            }
            .parties{
                width:100%;
                height:50%;
            }
            .flexy2>div{
               height:350px;
               width:250px;
            }
            .parties>p,h2{
                text-align: center;
            }
            .parties>img{
                margin-left:3.2vw;
            }
            .flexy3{
                display: flex;
                box-sizing: border-box;
                margin-top: 120px;
                justify-content:center; 
                flex-direction: row;
                flex-wrap: wrap;
            }
            .flexy3>div{
               width:431px;
            }
            .flexy4{
                display: flex;
                box-sizing: border-box;
                padding-top: 120px;
                flex-direction: row;
                flex-wrap: wrap;
            }

        </style>
        <title>DoorDash Food Delivery & Takeout - From Restaurants Near You</title>
    </head>
<body>

<div style="position: relative;height:580px">
  <!-- Background wrapper: -->
        <div class="bg" style="position: absolute; z-index: 1; left: 0; top: 0;">
    <!-- All background content goes here... -->
  </div>

  <!-- Content wrapper; all original content goes inside of this div: -->
  <div style="position: relative; z-index: 2;">
    <!-- Begin content block -->
        <div class="flexy">
            <button>Sign Up</button>
            <a style="color:white">Sign In</a>
        </div>
        <div style="margin-left:33%;width:37vw;margin-top:8%"><span style="font-size:4vw;color:white">Restaurants and more, delivered to your door</span>
            <br>
            <input style="margin-left:22%;margin-top:10px;width:300px;border-radius:30px;border:none;height:30px;padding-left:10px;direction:ltr" type="text" placeholder="Enter Delivery Address"><input type="submit" value="Go" style="border:none;margin-left:-30px;border-radius:50%;background-color:red;color:white;height:28px;width:28px"></div>
        <div style="display:flex;position:absolute;top:12px;width:100%;justify-content:center">
            <svg height="42"width="42" viewBox="0 0 99.5 56.5">
                <path d="M95.64,13.38A25.24,25.24,0,0,0,73.27,0H2.43A2.44,2.44,0,0,0,.72,4.16L16.15,19.68a7.26,7.26,0,0,0,5.15,2.14H71.24a6.44,6.44,0,1,1,.13,12.88H36.94a2.44,2.44,0,0,0-1.72,4.16L50.66,54.39a7.25,7.25,0,0,0,5.15,2.14H71.38c20.26,0,35.58-21.66,24.26-43.16"></path>
            
            </svg>
            <svg style="padding-top:10px"height="18" width="155" viewBox="0 0 361.1 42">
                <path d="M8.62,8.66V33.38h6.32A12.21,12.21,0,0,0,27,21,12,12,0,0,0,14.94,8.66ZM14.94.91C26.72.91,35.63,9.81,35.63,21S26.72,41.14,14.94,41.14H1a1,1,0,0,1-1-1V1.95a1,1,0,0,1,1-1Z"></path>
                <path d="M66,34.24A13.22,13.22,0,1,0,52.82,21,13.24,13.24,0,0,0,66,34.24M66,0C78.4,0,87.88,9.53,87.88,21S78.4,42,66,42,44.2,32.52,44.2,21,53.68,0,66,0"></path>
                <path d="M118,34.24A13.22,13.22,0,1,0,104.75,21,13.24,13.24,0,0,0,118,34.24M118,0c12.36,0,21.84,9.48,21.84,21S130.32,42,118,42,96.12,32.52,96.12,21,105.6,0,118,0"></path>
                <path d="M168.75,8.66h-8.91V19.3h8.91a5.22,5.22,0,0,0,5.46-5.17,5.28,5.28,0,0,0-5.46-5.46M151.22,1.95a1,1,0,0,1,1-1H169c8,0,13.79,5.86,13.79,13.22a13,13,0,0,1-7.18,11.78l7.74,13.68a1,1,0,0,1-.91,1.56h-6.79a1,1,0,0,1-.91-.54l-7.46-13.54h-7.47v13a1,1,0,0,1-1,1h-6.54a1,1,0,0,1-1-1Z" ></path>
                <path d="M205.26,8.85V33.57h6.32a12.21,12.21,0,0,0,12.07-12.36A12,12,0,0,0,211.58,8.85Zm6.32-7.76c11.78,0,20.69,8.91,20.69,20.12s-8.91,20.12-20.69,20.12h-13.9a1,1,0,0,1-1-1V2.14a1,1,0,0,1,1-1Z"></path>
                <path d="M258.56,10.92l-4.89,13.22h9.77Zm-7.76,20.69-3.2,8.8a1,1,0,0,1-1,.69h-6.94a1,1,0,0,1-1-1.42l15-38.15a1,1,0,0,1,1-.66h7.77a1,1,0,0,1,1,.66l15,38.15a1,1,0,0,1-1,1.42h-6.94a1,1,0,0,1-1-.69l-3.2-8.8Z"></path>
                <path d="M286.48,11.78C286.48,5.46,291.94,0,300.56,0a17.84,17.84,0,0,1,12.51,4.71,1,1,0,0,1,0,1.47L309.22,10a1,1,0,0,1-1.42,0,10.12,10.12,0,0,0-6.67-2.63c-3.45,0-6,2-6,4.31,0,7.47,20.38,3.16,20.38,17.53C315.5,36.49,310,42,300.27,42a20.41,20.41,0,0,1-14.54-5.84,1,1,0,0,1,0-1.47l3.72-3.72a1,1,0,0,1,1.45,0,12.85,12.85,0,0,0,8.79,3.58c4.31,0,7.15-2.3,7.15-5.18,0-7.47-20.37-3.16-20.37-17.53" ></path>
                <path d="M352.47,1.9V17H335.22V1.9a1,1,0,0,0-1-1h-6.54a1,1,0,0,0-1,1V40.05a1,1,0,0,0,1,1h6.54a1,1,0,0,0,1-1V24.71h17.24V40.05a1,1,0,0,0,1,1H360a1,1,0,0,0,1-1V1.9a1,1,0,0,0-1-1h-6.54A1,1,0,0,0,352.47,1.9Z"></path>
            </svg>
        </div>
    <!-- End content block -->
  </div>
</div>

<div style="position: relative;height:1000px">
  <!-- Background wrapper: -->
        <div style="position: absolute; z-index: 1; left: 0; top: 0;">
        <!-- All background content goes here... -->
        </div>

        <!-- Content wrapper; all original content goes inside of this div: -->
        <div style="position: relative; z-index: 2;">
        <!-- Begin content block -->
            <div class="flexy2">
                <div>
                    <div class="parties"><img src="img/dasher.svg" style="height:100%"></div>
                    <div class="parties"><h2>Become a Dasher</h2><p>As a delivery driver ...</p><p>start earning</p></div>
                </div>
                <div>
                    <div class="parties"><img src="img/partner.svg" style="height:100%"></div>
                    <div class="parties"><h2>Become a <br>Partner</h2><p>Grow your businiess ...</p><p>sign up your store</p></div>
                </div>
                <div>
                    <div class="parties"><img src="img/iphone.svg" style="height:100%"></div>
                    <div class="parties"><h2>Try the App</h2><p>Experience the best ...</p><p>get the app</p></div>
                </div>
            </div>


            <div class="flexy3" style="align-items:center">                
                <div>
                    <div class="parties" ><h1>It’s all here.<br> All in one app.</h1></div>
                    <div class="parties" style="margin-bottom:180px"><p style="text-align:left">Discover local, on-demand delivery or</p><input type="submit" value="Get The App"></div>
                </div>
                <img src="img/all.jpg">
            </div>
        <!-- End content block -->
        </div>
</div>


<div style="position: relative;height:750px">
  <!-- Background wrapper: -->
        <div style="position: absolute; z-index: 1; left: 0; top: 0;background-color:#ffefe8;height:100%;width:100%">
        <!-- All background content goes here... -->
        </div>

        <!-- Content wrapper; all original content goes inside of this div: -->
        <div style="position: relative; z-index: 2;">
        <!-- Begin content block -->
        <div class="flexy4" style="align-items:center;padding-top:70px">                
                <img src="img/all.jpg" style="margin-left:200px">
                <div style="margin-left:70px">
                    <div class="parties"><h1>Every Flavor Welcome</h1></div>
                    <div class="parties" style="margin-bottom:180px"><p style="text-align:left">From your neighborhood sushi spot to</p><input type="submit" value="Get The App"></div>
                </div>
            </div>
        <!-- End content block -->
        </div>
</div>
<div style="position: relative;height:750px">
  <!-- Background wrapper: -->
        <div style="position: absolute; z-index: 1; left: 0; top: 0;background-color:black;height:100%;width:100%">
        <!-- All background content goes here... -->
        </div>

        <!-- Content wrapper; all original content goes inside of this div: -->
        <div style="position: relative; z-index: 2;">
        <!-- Begin content block -->

        <!-- End content block -->
        </div>
</div>



</body>
</html>
























<!-- <svg height="210" width="400">
  <path d="M95.64,13.38A25.24,25.24,0,0,0,73.27,0H2.43A2.44,2.44,0,0,0,.72,4.16L16.15,19.68a7.26,7.26,0,0,0,5.15,2.14H71.24a6.44,6.44,0,1,1,.13,12.88H36.94a2.44,2.44,0,0,0-1.72,4.16L50.66,54.39a7.25,7.25,0,0,0,5.15,2.14H71.38c20.26,0,35.58-21.66,24.26-43.16" />
  Sorry, your browser does not support inline SVG.
</svg> -->
