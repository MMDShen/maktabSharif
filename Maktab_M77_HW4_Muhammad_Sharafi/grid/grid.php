<!DOCTYPE html>
<html>
    <head>
        <style>
            .grid{
                display:grid;
                grid-template-areas:'m1 m1 m1 m1 m1 m1 m1 m1 m1 m1 m1 m1. ' 
                                    'm2 m2 m2 m2 m2 m2 m3 m3 m3 m3 m3 m3 .'
                                    'm4 m4 m4 m4 m5 m5 m5 m5 m6 m6 m6 m6 .'
                                    'm7 m7 m7 m8 m8 m8 m9 m9 m9 ma ma ma .'
                                    'mb mb mc mc md md me me mf mf mg mg .'
                                    'mh mi mj mk ml mm mn mo mp mq mr ms .';
                gap:10px;
                height:100%;
                margin-left: 6vw;
            }
            .grid>div{
                height:50px;
                background-color: red;
            }
            div>p{
                justify-content: center;
                text-align: center;
                color:white;
            }
            .item1{
                grid-area:m1;
            }
            .item2{
                grid-area:m2;
            }
            .item3{
                grid-area:m3;
            }
            .item4{
                grid-area:m4;
            }
            .item5{
                grid-area:m5;
            }
            .item6{
                grid-area:m6;
            }
            .item7{
                grid-area:m7;
            }
            .item8{
                grid-area:m8;
            }
            .item9{
                grid-area:m9;
            }
            .item10{
                grid-area:ma;
            }
            .item11{
                grid-area:mb;
            }
            .item12{
                grid-area:mc;
            }
            .item13{
                grid-area:md;
            }
            .item14{
                grid-area:me;
            }
            .item15{
                grid-area:mf;
            }
            .item16{
                grid-area:mg;
            }
            .item17{
                grid-area:mh;
            }
            .item18{
                grid-area:mi;
            }
            .item19{
                grid-area:mj;
            }
            .item20{
                grid-area:mk;
            }
            .item21{
                grid-area:ml;
            }
            .item22{
                grid-area:mm;
            }
            .item23{
                grid-area:mn;
            }
            .item24{
                grid-area:mo;
            }
            .item25{
                grid-area:mp;
            }
            .item26{
                grid-area:mq;
            }
            .item27{
                grid-area:mr;
            }
            .item28{
                grid-area:ms;
            }
        </style>
    </head>
    <body>
            <div class="grid">
                <div class="item1"><p> 1 </p>
                </div>
                <div class="item2"><p> 2 </p>
                </div>
                <div class="item3"><p> 3 </p>
                </div>
                <div class="item4"><p> 4 </p>
                </div>
                <div class="item5"><p> 5 </p>
                </div>
                <div class="item6"><p> 6 </p>
                </div>
                <div class="item7"><p> 7 </p>
                </div>
                <div class="item8"><p> 8 </p>
                </div>
                <div class="item9"><p> 9 </p>
                </div>
                <div class="item10"><p> 10 </p>
                </div>
                <div class="item11"><p> 11 </p>
                </div>
                <div class="item12"><p> 12 </p>
                </div>
                <div class="item13"><p> 13 </p>
                </div>
                <div class="item14"><p> 14 </p>
                </div>
                <div class="item15"><p> 15 </p>
                </div>
                <div class="item16"><p> 16 </p>
                </div>
                <div class="item17"><p> 17 </p>
                </div>
                <div class="item18"><p> 18 </p>
                </div>
                <div class="item19"><p> 19 </p>
                </div>
                <div class="item20"><p> 20 </p>
                </div>
                <div class="item21"><p> 21 </p>
                </div>
                <div class="item22"><p> 22 </p>
                </div>
                <div class="item23"><p> 23 </p>
                </div>
                <div class="item24"><p> 24 </p>
                </div>
                <div class="item25"><p> 25 </p>
                </div>
                <div class="item26"><p> 26 </p>
                </div>
                <div class="item27"><p> 27 </p>
                </div>
                <div class="item28"><p> 28 </p>
                </div>

            </div>
    </body>
</html>