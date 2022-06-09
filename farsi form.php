<!doctype html>
<html>
    <head>
        <title>HW2 Primary</title>
        <style>
            span{
                color:red;
            }
            label { display:block;
                text-align:right;
                height: 1.6em;
            }
            div{
                display:block;
                margin-left:50px;
                float:right;
            }

    .some-class {
      float: right;
      clear: none;
      margin-top:20px;
      margin-left:0px;
      
    }
    input{
      text-align:right;
    }
    
    .good {
      float: right;
      clear: none;
      display: block;
      padding-left:86px;
    }
    
    input[type=radio],
    input.radio {
      float: left;
      clear: none;
      margin: 2px 0 0 2px;
    }

        </style>
    </head>
    <body >
        <form  style="width:100%"action="#">

          <div>
            <label for="name"><span>*</span>نام</label>
            <input type="text" pattern="[ا-ی]+" minlength="2" id="name" required>
            </input>
          </div>

          <div>
            <label for="surname"><span>*</span>نام خانوادگی</label>
            <input type="text" pattern="[ا-ی]+" minlength="2" id="surname" required>
            </input>
          </div>

          <div>
            <label for="dad"><span>*</span>نام پدر</label>
            <input type="text" pattern="[ا-ی]+" minlength="2" id="dad" required>
            </input>
          </div>
                <br> <br> <br> <br>
          <div style="margin-left:70px">
            <label for="idnum"><span>*</span>شماره شناسنامه</label>
            <input style="width:220px" type="text" pattern="(([1-9]{4})|(00[1-9]{8})|[1-9]{8}|(\+98[0-9]{11}))" id="idnum" required>
            </input>
          </div> 

          <div >
            <label><span>*</span>شماره ملی</label>
            <input style="width:220px" type="text" pattern="(([1-9]{4})|(00[1-9]{8})|[1-9]{8}|(\+98[0-9]{11}))" minlength="6" id="idcode" required>
            </input>
          </div>
                <br> <br> <br> <br>
          <div >
            <label><span>*</span>وضعیت تحصیلی<br><span style="color:gray;font-size:12px;"> دانشجو یا دانش آموخته دوره</span></label>
            <br>
          <div class="some-class">
            <label style="color:gray;" class="good" for="yss">دانشجو کارشناسی</label> 
            <input type="radio" class="radio" name="x" id="yss" id="1" />
             <br>
            <label style="color:gray;" class="good" for="zss">دانش آموخته کارشناسی</label> 
            <input type="radio" class="radio" name="x" id="zss" id="2" />
             <br>
             <label style="color:gray;" class="good" for="ydd">دانشجو کارشناسی ارشد</label> 
            <input type="radio" class="radio" name="x" id="ydd" id="3" />
             <br>
            <label style="color:gray;" class="good" for="zff">دانش آموخته کارشناسی ارشد</label> 
            <input type="radio" class="radio" name="x" id="zff" id="4" />
             <br>
             <label style="color:gray;" class="good" for="ygg">دانشجو دکترا</label> 
            <input type="radio" class="radio" name="x" id="ygg" id="5" />
             <br>
            <label style="color:gray;" class="good" for="zhh">دانش آموخته دکترا</label> 
            <input type="radio" class="radio" name="x" id="zhh" id="6" />
             <br>
          </div>
            

          </div>
          <div >
            <label><span>*</span>وضعیت تحصیلی<br><span style="color:gray;font-size:12px;"> دانشجو یا دانش آموخته دوره</span></label>
            <br>
          <div class="some-class">
            <label style="color:gray;" class="good" for="y">دانشجو</label> 
            <input type="radio" class="radio" name="x" id="y" id="1" />
             <br>
            <label style="color:gray;" class="good" for="u">دبیر</label> 
            <input type="radio" class="radio" name="x" id="u" id="2" />
             <br>
             <label style="color:gray;" class="good" for="r">استاد</label> 
            <input type="radio" class="radio" name="x" id="r" id="3" />
             <br>
            <label style="color:gray;" class="good" for="we">شاغل بخش دولتی</label> 
            <input type="radio" class="radio" name="x" id="we" id="4" />
             <br>
             <label style="color:gray;" class="good" for="ew">شاغل بخش خصوصی</label> 
            <input type="radio" class="radio" name="x" id="ew" id="5" />
             <br>
            <label style="color:gray;" class="good" for="za">باز نشسته</label> 
            <input type="radio" class="radio" name="x" id="za" id="6" />
             <br>
          </div>
            

          
          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <div style="margin-top:40px">
          <div style="margin-left:70px">
            <label for="where"><span>*</span>نشانی محل سکونت</label>
            <input style="width:220px" type="text" minlength="6" id="where" required>
            </input>
          </div> 

          <div >
            <label for="work">نشانی محل کار</label>
            <input style="width:220px" type="text" id="work">
            </input>
          </div>
​     </div>
<br><br><br><br><br><br>
    <div style="margin-top:40px">
          <div style="margin-left:70px">
            <label for="cell"><span>*</span>تلفن همراه</label>
            <input style="width:220px" type="text" minlength="11" maxlength="11" id="cell" required>
            </input>
          </div> 

          <div >
            <label for="tel" >تلفن ثابت</label>
            <input style="width:220px" type="text" minlength="11" maxlength="11" id="tel">
            </input>
          </div>
​     </div>

<br><br><br><br><br><br><br><br>
          <div style="margin:20px 0px">
            <label for="mail"><span>*</span>نشانی پست الکترونیکی</label>
            <input style="width:520px;float:right" type="text" minlength="6" id="mail" required>
            </input>
          </div>
            <br><br><br><br><br>
          <div style="margin:20px 0px">

            <label style="text-align:right"for="capcha"><span style="float:left;padding-left:390px"><img src="img/capcha.jpg" style="width:60px;"></span>کد امنیتی</label>
            <input style="width:520px;float:right" type="text" minlength="6" id="capcha" required>


            </input>
          </div>
          <br><br><br><br><br><br>
          <input style="float:right;margin-bottom:50px" type="submit" value="ثبت فرم" style="margin-right:5px" require>​
        </form>
        


    </body>
</html>