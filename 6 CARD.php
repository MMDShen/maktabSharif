<!DOCTYPE html>
<html>
    <head>
        <style>

            .fixedbackground{
                position:fixed;
                background-color:darkslateblue;
                width:99%;
                height:200px;
                z-index: -1;
                border-radius: 10px 10px 0px 0px ;
            }

            .itemsbox{
                position: absolute;
                left: 0; 
                right: 0; 
                top: 0; 
                margin: auto;
                width:85%;
                height:1000px;
                height:auto;
                /*background-color:blue;*/
                margin-top:80px;
                text-align:center;
            }
            .item{
                display:inline-block;
                height:500px;
                width:300px;
                background-color: lightgray;
                margin:20px;
                border-radius: 10px;
                border:0.08em solid darkslateblue;
                
            }
            h4{
                color:white;
            }
            .parts{
                position: relative;
                height:50%;
                width:100%;
                /*background-color: red;*/
                text-align:left;
            }
            img{
                position: absolute;
                width:100%;
                height:100%;
                border-radius: 10px 10px 0px 0px ;
            }
            .tags{
                position:absolute;
                margin:5px;
                z-index: 1;
                right:0;
                top:0;
            }
            p{
                display:inline-block;
                margin-right:3px;
                /*background-color:red;*/
                width:45px;
                height:20px;
                text-align:center ;
                border-radius: 10px;
            }
            span{
                font-size: 12px;
                color:white;
            }
            h3{
                display:inline-block;
                margin-left:10px;
            }
            .tagflex{
                position:flex;
                margin-left:10px;
            }
        </style>
    </head>
    <body>
            <!-- its the fixed backgrond which is purple while have front round borders -->
            <div class="fixedbackground">
            </div>

            <!-- cards are in it, its absolute -->
            <dive class="itemsbox">
                <h4>LATEST CHALLENGES</h4>
                <br>

                <!-- its inline-block and have fixed widths and heights -->
                <div class="item">

                    <!-- "parts class divided each cards in two parts, its text-align is ltr"  -->
                    <div class="parts">

                        <!-- are absolute to their relative ancestors -->
                        <div class="tags">
                            <p style="background-color:red"><span>*NEW</span></p>
                            <p style="background-color:lightblue;width:40px"><span style="color:blue">FREE</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        
                        <!-- its block level -->
                        <h3>title 1</h3>  
                        <br>

                        <!-- the only flexes in this php -->
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>

                            <!-- //weak point of my code -->
                            <p style="float:right;margin-right:5px;border:2px blue solid;border-radius:4px;width:80px">
                                <span style="color:white;background-color:blue;border-collapse:collapse;padding:4px;margin-right:10px">1</span>
                                <span style="color:blue;margin-right:2px">NEWBIE</span>
                            </p>

                        </div>

                        <!-- tozih -->
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>

                <!-- other cards same stories -->
                <div class="item">
                    <div class="parts">
                        <div class="tags">
                            <p style="background-color:darkslateblue;width:66px"><span style="color:white">PREMIUM</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        <h3>title 1</h3>  
                        <br>
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>
                            <p style="color:red">JS</p>
                            <p style="float:right;margin-right:5px;border:2px orange solid;border-radius:4px;width:120px">
                                <span style="color:white;background-color:orange;padding:4px;margin-right:10px">3</span>
                                <span style="color:orange;margin-right:2px">INTERMEDIATE</span>
                            </p>
                        </div>
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>

                <div class="item">
                    <div class="parts">
                        <div class="tags">
                            <p style="background-color:lightblue;width:40px"><span style="color:blue">FREE</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        <h3>title 1</h3>  
                        <br>
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>
                            <p style="color:red">JS</p>
                            <p style="float:right;margin-right:5px;border:2px orange solid;border-radius:4px;width:120px">
                                <span style="color:white;background-color:orange;padding:4px;margin-right:10px">3</span>
                                <span style="color:orange;margin-right:2px">INTERMEDIATE</span>
                            </p>
                        </div>
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>

                <br>

                <div class="item">
                    <div class="parts">
                        <div class="tags">
                            <p style="background-color:darkslateblue;width:66px"><span style="color:white">PREMIUM</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        <h3>title 1</h3>  
                        <br>
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>
                            <p style="float:right;margin-right:5px;border:2px blue solid;border-radius:4px;width:80px">
                                <span style="color:white;background-color:blue;border-collapse:collapse;padding:4px;margin-right:10px">1</span>
                                <span style="color:blue;margin-right:2px">NEWBIE</span>
                            </p>
                        </div>
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>

                <div class="item">
                    <div class="parts">
                        <div class="tags">
                            <p style="background-color:lightblue;width:40px"><span style="color:blue">FREE</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        <h3>title 1</h3>  
                        <br>
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>
                            <p style="float:right;margin-right:5px;border:2px blue solid;border-radius:4px;width:80px">
                                <span style="color:white;background-color:blue;border-collapse:collapse;padding:4px;margin-right:10px">1</span>
                                <span style="color:blue;margin-right:2px">NEWBIE</span>
                            </p>
                        </div>
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>
                
                <div class="item">
                    <div class="parts">
                        <div class="tags">
                            <p style="background-color:darkslateblue;width:66px"><span style="color:white">PREMIUM</span></p>
                        </div>
                        <img src="img/OneManArmy.jpg">
                    
                    </div>
                    <div class="parts" style="background-color:white">
                        <h3>title 1</h3>  
                        <br>
                        <div class="tagflex">
                            <p style="color:blue">HTML</p>
                            <p style="color:purple">CSS</p>
                            <p style="float:right;margin-right:5px;border:2px blue solid;border-radius:4px;width:80px">
                                <span style="color:white;background-color:blue;border-collapse:collapse;padding:4px;margin-right:10px">1</span>
                                <span style="color:blue;margin-right:2px">NEWBIE</span>
                            </p>
                        </div>
                        <p style="width:100%;text-align:left;margin-right:5px;margin-left:10px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quisquam dolorum veniam</p>

                    </div>
                </div>     
            </dive>
    </body>
</html>