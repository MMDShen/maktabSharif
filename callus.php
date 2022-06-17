<html>
    <head>
        <style>
            .divy{
                position:absolute ;
                height:300px;
                width:100%;
                background: rgb(26,180,126);
                background: linear-gradient(187deg, rgba(26,180,126,1) 0%, rgba(92,164,199,1) 59%, rgba(23,96,203,1) 100%); 
                z-index: -1;
                left:0;
                top:0;
                text-align: center;
                margin-bottom: 50px;
            }
            .vasati{
                /*background-color: purple;*/
                margin-top:320px;
                width:70%;
                height:1000px;
                justify-self: center;

                
            }
            .payam{
                height:60px;
                width:100%;
                direction:rtl;
                background-color:rgba(226,240,251);
                text-align:right;
                border-radius:5px;
            }
        </style>
    </head>
    <body style="display:flex;justify-content:center">
        <?php
        require("callus-extentions/head.php");
        ?>
        <div class="divy">
            <h1 style="margin-top:180px;font-weight:bolder;color:white">ارتباط با ما</h1>
        </div>
        <div class="vasati">
            <div class="payam">
                <p style="margin-top: 18px;margin-right:14px;display: inline-block">لطفا برای ثبت‌نام در دوره‌ها از طریق دکمه <span style="text-decoration:underline">مشاوره و ثبت نام</span> اقدام فرمایید. </p>
            </div>

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "<div class=\"payam\" style=\"margin-top:20px;background-color:red\">
                <p style=\"margin-top: 18px;color:white;margin-right:14px;display: inline-block\">با تشکر از شما <span style=\"text-decoration:underline\">مشاوره و ثبت نام</span> اقدام فرمایید. </p>
            </div>";
                }  ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="direction:rtl">
                <label for="fn" style="display:inline-block;font-size:20px;width:50%">
                    نام <span style="font-size:14px">x</span>
                </label>
                <label for="ln" style="display:inline-block;font-size:20px">
                   نام خانوادگی <span style="font-size:14px">x</span>
                </label>
                <br>
                <input  id="fn" name="firstname" type="text" style="width:50%;height:40px;margin-top:5px;border-radius:5px;border:1px darkgray solid"required>
                <input  id="ln" name="lastname" type="text" style="width:49.7%;float:left;height:40px;margin-top:5px;border-radius:5px;border:1px darkgray solid" required>
                <br>

                <label for="call" style="display:inline-block;font-size:20px;width:50%;margin-top:10px">
                    شماره تماس <span style="font-size:14px">x</span>
                </label>
                <label for="mail" style="display:inline-block;font-size:20px;margin-top:10px">
                   ایمیل <span type="email" style="font-size:14px">x</span>
                </label>
                <br>
                <input  id="call" name="call" type="text" placeholder="09123456789" style="width:50%;height:40px;margin-top:5px;border-radius:5px;border:1px darkgray solid;font-weight:bold;padding-right:10px" required>
                <input  id="mail" name="mail" type="text" style="width:49.7%;float:left;height:40px;margin-top:5px;border-radius:5px;border:1px darkgray solid" required>
                <br>

                <label style="display:inline-block;font-size:20px;width:50%;margin-top:10px">
                    موضوع <span style="font-size:14px">x</span>
                </label>
                <select style="background-color:white;width:100%;height:40px;margin-top:5px;border-radius:5px;border:1px darkgray solid;margin-top:5px;" required>
                    <option value="" selected disabled>
                        لطفا موضوع پیام خود را انتخاب کنید...
                    </option>
                    <option  value="companies" >
                        شرکت ها - درخواست جذب نیرو
                    </option>
                    <option  value="modares" >
                        مدرس - درخواست همکاری
                    </option>
                    <option  value="other" >
                        سایر
                    </option>
                </select>
                <label for="passage" style="display:inline-block;font-size:20px;width:50%;margin-top:10px">
                    پیام <span style="font-size:14px">x</span>
                </label>
                <br>
                <textarea id="passage" name="payam" style="width:100%;height:200px;border-radius:5px;border:1px darkgray solid;margin-top:5px;" required></textarea>
                <input name=”submit” type="submit" value="ثبت درخواست" style="color:white;float:left;margin-top:14px;border-radius:30px;padding:8px 30px;font-weight:bold; background: rgb(255,149,0);border:none;background: linear-gradient(262deg, rgba(255,149,0,1) 0%, rgba(241,235,34,1) 100%); ">
            </form>
            <br>

        </div>
        <br>
        <?php
        require("callus-extentions/footer.php");
        ?>
    </body>
</html>