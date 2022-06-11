<!doctype html>
<html>
    <head>
        <!--tamrin avval, Besmellah-->
        <title>HW2 Primary</title>
        <style>
            span{
                color:red;
            }
            label { display:inline-block; width: 200px; }
            div{
                height:1.8em;
            }
            .good{
                display:inline-block; width: 500px; 
            }
        </style>
    </head>
    <body>
        <form action="#">
          <div>
            <label for="name">Name<span>*</span></label>
            <input type="text" minlength="6" id="name" required>
            </input>
          </div>  
            
          <div>
            <label for="address">Address</label>
            <input id="address">
            </input>
          </div>  
          <div>
            <label for="zipcode">Zip Code<span>*</span></label>
            <input id="zipcode" type="text" pattern="[0-9]{5}" required>
            </input>
          </div>  
          <div>
            <label for="country" >Country<span>*</span></label>
                <select style="width:120px"    required>
                    <option value=""  selected disabled>please select ...</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Oman</option>
                    <option>Qatar</option>
                    <option>Dubai</option>
                    <option>Yemen</option>
                    <option>Syria</option>
                </select>
          </div>  
          <div>
            <label for="gender" >Gender<span>*</span></label>
            <input id="gender" type="radio" name="gen" value="male"    required>
            <label for="male" style="display:inline-block; width: 50px;">Male</label>
            <input id="gender" type="radio" name="gen" value="male"    required>
            <label>Female</label>
          </div>  
          <div>
              
            <label for="preferences" >Preferences<span>*</span></label>
            <input type="checkbox" name="color" value="red">
            <label style="display:inline-block; width: auto;">Red</label>
            <input type="checkbox" name="color" value="green">
            <label style="display:inline-block; width: auto;">Green</label>
            <input type="checkbox" name="color" value="blue" >
            <label style="display:inline-block; width: auto;">Blue</label>
          </div>  
          <div>
            <label for="phone" >Phone<span>*</span></label>
            <input type="text" minlength="11" pattern="09[0-9]{9}" id="phone"  required>
            </input>
          </div>  
          <div>
            <label for="email">Email<span>*</span></label>
            <input type="email" id="email" pattern="^[a-z0-9._%+-]+@gmail\.com$" required>
            </input>
          </div>  
          
          <div>
            <label for="pass" >password (6-8 characters)<span>*</span></label>
            <input type="password" minlength="6" maxlength="8" id="pass"  required>
            </input>
          </div>  
          <div>
            <label for="verify" >Verify password<span>*</span></label>
            <input type="password" minlength="6" maxlength="8" id="verify"   required>
            </input>
          </div>  
          <label></label> 
          <input type="submit" value="SEND" style="margin-right:5px">​
          <input type="reset" value="CLEAR">
        </form>
    </body>
</html>
