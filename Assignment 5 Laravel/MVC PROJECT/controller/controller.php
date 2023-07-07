<?php
require_once("model/model.php");
// error_reporting (0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Controller extends Model
{

    public function __construct()
    {
        // Logic
            parent :: __construct();

            //insert data for Registration
               if(isset($_POST["register"]))
                {

                    require_once("PHPMailer/PHPMailer.php");
                    require_once("PHPMailer/SMTP.php");
                    require_once("PHPMailer/Exception.php");

                    $fnm=$_POST["fnm"];
                    $lnm=$_POST["lnm"];
                    $em=$_POST["email"];
                    $pass=$_POST["pass"];
                    $phone=$_POST["phone"];
                 // upload photo or images or file
                    $tmp_name=$_FILES["img"]["tmp_name"];
                    $path="uploads/registerusers/".$_FILES["img"]["name"];
                    move_uploaded_file($tmp_name,$path);
                    $add=$_POST["address"];
                    $gender=$_POST["gender"];
                    $data= array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"phone"=>$phone,"address"=>$add,"gender"=>$gender,"photo"=>$path);
                    $chk=$this->insertalldata($data,'register_user');

                    try {

                        ob_start();    
                        error_reporting(0);
                        $mail = new PHPMailer(true);
                        //Server settings
                        $mail->SMTPDebug =false;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
                        $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
                        $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom($_POST["email"], 'Mail sending');
                        $mail->addAddress($_POST["email"], 'Forget Password');     //Add a recipient

                        //Attachments
                        $mail->addAttachment('welcome.pdf'); 
                        // $mail->addAttachment('/Temp2/Image/image1.jpg' ,'new.jpg'); 
                       
                        //Content
                        $mail->isHTML(true); //Set email format to HTML
                        $mail->Subject = 'Contact with Us email sending data';
                        // $chk=$this->frgpassword('tbl_addstudents','email',$em);
                        $mail->Body="Your FirstName Is :".$fnm."<br>"."Your LastName Is :".$lnm."<br>"."Your email Is :".$em."<br>". "Your Phone Is :" .$phone."<br>"."Your Address Is :".$add."<br>"." Nirav's E-Commerse Pvt. Ltd. Contact Us Sending Emails "."<br>"."Contact Us On : (+91)-7894556123"."<br>"."Emailus: <a href ='mailto:niravmovie04@gmail.com'>nirav@gmail.com</a>";
                        $mail->send();
        
                      if($chk)
                        {
                          echo "<script>
                          alert('Thanks For Register With Us!')
                          window.location='login';
                          </script>";
                        }
                        else 
                        {
                            echo "<script>
                            alert('Somthing Went Wrong!')
                            window.location='register';
                            </script>";
                        }
                     
                    } 
                    catch(Exception $e) 
                    {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }


                        //    if($chk)
                        //    {
                        //        echo "<script>
                        //        alert('You Are Register Successfully!')
                        //        window.location='register';
                        //        </script>";
                        //    }


                    // EXTRA MAIL SENDING
                    //     try
                    // {
                    //     //Server settings
                    //     $mail->SMTPDebug = False;                      //Enable verbose debug output
                    //     $mail->isSMTP();                                            //Send using SMTP
                    //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    //     $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
                    //     $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
                    //     $mail->SMTPSecure = "TLS" ;            //Enable implicit TLS encryption
                    //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //     //Recipients
                    //     $mail->setFrom($_POST["email"], 'Mail sending');
                    //     $mail->addAddress('niravmovie04@gmail.com', 'Contact Us Mail sending');    
                    //     //Add a recipient
                    //     // $mail->addAddress('ellen@example.com');               //Name is optional
                    //     // $mail->addReplyTo('info@example.com', 'Information');
                    //     // $mail->addCC('cc@example.com');
                    //     // $mail->addBCC('bcc@example.com');

                    //     //Attachments
                    //     // $mail->addAttachment('/Temp2/Image/image1.jpg' ,'new.jpg');         
                    //     //Add attachments
                    //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //     //Content
                    //     $mail->isHTML(true);                                  //Set email format to HTML
                    //     $mail->Subject = 'Contact with us Email sending data';
                    //     $mail->Body    = "Customer FirstName Is :".$fnm."<br>"."Customer LastName Is :".$lnm."<br>"."Customer email Is :".$em."<br>". "Customer Phone Is :" .$phone."<br>"."Customer Address Is :".$add."<br>"." Nirav's E-Commerse Pvt. Ltd. Contact Us Sending Emails "."<br>"."Contact Us On : (+91)-7894556123"."<br>"."Emailus: <a href ='mailto:niravmovie04@gmail.com'>nirav@gmail.com</a>";
                    //     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    //     $mail->send();
                    //     echo "<script> alert('Thanks For Contact With Us Our One Of Admin Contact With You Soon!')
                    //     window.location='login';
                    //     </script>";
                    // }

                    // catch (Exception $e)
                    // {
                    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    // }
                }

            //update data here
                if(isset($_POST["upd"]))
                {
                    $id=$_SESSION["usid"];
                    $fnm=$_POST["fnm"];
                    $lnm=$_POST["lnm"];
                    $em=$_POST["email"];
                    $phone=$_POST["phone"];
                 // upload photo or images or file
                    $tmp_name=$_FILES["img"]["tmp_name"];
                    $path="uploads/registerusers/".$_FILES["img"]["name"];
                    move_uploaded_file($tmp_name,$path);
                    $add=$_POST["add"];

                    $chk=$this->updatedata('register_user',$path,$fnm,$lnm,$em,$add,$phone,'usid',$id);
                        if($chk)
                        {
                            echo "<script>
                            alert('Your Profile Update Successfully')
                            window.location='profile-management';
                            </script>";
                        }
                }


            //change password here   
                if(isset($_POST["changepass"]))
                {
                    $id=$_SESSION["usid"];
                    $opass=$_POST["opass"];
                    $npass=$_POST["npass"];
                    $cpass=$_POST["cpass"];
                    $chk=$this->changepassworddata('register_user',$opass,$npass,$cpass,'usid',$id);
                    if($chk)
                    {
                        unset($_SESSION["usid"]);
                        unset($_SESSION["email"]);
                        unset($_SESSION["firstname"]);
                        session_destroy();
                        echo "<script>
                        alert('Your password successfully changed')
                        window.location='login';
                        </script>";
                    }
                    else 
                    {
                        echo "<script>
                        alert('Somthing Went Wrong!')
                        window.location='profile-management';
                        </script>";
                    }
                }

            //forget Password
                if(isset($_POST["forget"]))
                {
                    require_once("PHPMailer/PHPMailer.php");
                    require_once("PHPMailer/SMTP.php");
                    require_once("PHPMailer/Exception.php");   
                    $em=$_POST["email"];
                    try {
                        $mail = new PHPMailer(true);
                        //Server settings
                        $mail->SMTPDebug =false;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
                        $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
                        $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom($_POST["email"], 'Mail sending');
                        $mail->addAddress($_POST["email"], 'Forget Password');     //Add a recipient
                    
                        //Content
                        $mail->isHTML(true); //Set email format to HTML
                        $mail->Subject = 'Contact with Us email sending data';
                        $chk=$this->frgpassword('register_user','email',$em);
                        $mail->Body="The password is :".$chk;
                        $mail->send();

                    if($chk)
                        {
                        echo "<script>
                        alert('we will successfully send your password in your email please checked and logged in again!')
                        window.location='login';
                        </script>";
                        }
                        else 
                        {
                            echo "<script>
                            alert('This email does not exist try with another registered email Id')
                            window.location='forget-password';
                            </script>";
                        }
                    
                    } 
                    catch(Exception $e) 
                    {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }

           // user login here 
               if(isset($_POST["log"]))
               {
                   $em=$_POST["email"];
                   $pass=$_POST["password"];
                   $log=$this->userlogin('register_user',$em,$pass);
                   if($log)
                   {
                       echo "<script>
                       alert('You are Logged In!')
                       window.location='./';
                       </script>"; 
                   } 
                   else 
                   {
       
                       echo "<script>
                       alert('Your email and password incorrect try again!')
                       window.location='login';
                       </script>"; 
                   }
               }


            // delete a data
                if(isset($_GET["delete"]))
                {
                    $delid=$_GET["delete"];
                    $id=array("usid"=>$delid);
                    $chk=$this->deletedata('register_user',$id);
                    if($chk)
                    {
                        unset($_SESSION["usid"]);
                        unset($_SESSION["email"]);
                        unset($_SESSION["firstname"]);
                        session_destroy();
                        echo "<script>
                        alert('Your profile removed successfully')
                        window.location='login';
                        </script>";

                    }
                }
   
           // logout here
               if(isset($_GET["logout"]))
               {
                   $lg=$this->logout();
                   if($lg)
                   {
                       echo "<script>
                       alert('Logout successfully!')
                       window.location='login';
                       </script>"; 
                   }
               } 
   
           //insert data for ContactUs
               if(isset($_POST["msg"]))
               {

                    require_once("PHPMailer/PHPMailer.php");
                    require_once("PHPMailer/SMTP.php");
                    require_once("PHPMailer/Exception.php");

                    $nm=$_POST["name"];
                    $em=$_POST["email"];
                    $sub=$_POST["subject"];
                    $msg=$_POST["message"];
                    $data= array("name"=>$nm,"email"=>$em,"subject"=>$sub,"message"=>$msg);
                    $chk=$this->insertalldata($data,'contact_us');
                    $mail = new PHPMailer(true);

                    try
                    {
                        //Server settings
                        $mail->SMTPDebug = False;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
                        $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
                        $mail->SMTPSecure = "TLS" ;            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom($_POST["email"], 'Mail sending');
                        $mail->addAddress('niravmovie04@gmail.com', 'Contact Us Mail sending');    
                        //Add a recipient
                        // $mail->addAddress('ellen@example.com');               //Name is optional
                        // $mail->addReplyTo('info@example.com', 'Information');
                        // $mail->addCC('cc@example.com');
                        // $mail->addBCC('bcc@example.com');

                        //Attachments
                        // $mail->addAttachment('/Temp2/Image/image1.jpg' ,'new.jpg');         
                        //Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Contact with us Email sending data';
                        $mail->Body    = "Customer Name Is :".$nm."<br>"."Customer email Is :".$em."<br>". "Customer Subject Is :" .$sub."<br>"."Customer Message Is :".$msg."<br>"." Nirav's E-Commerse Pvt. Ltd. Contact Us Sending Emails "."<br>"."Contact Us On : (+91)-7894556123"."<br>"."Emailus: <a href ='mailto:niravmovie04@gmail.com'>nirav@gmail.com</a>";
                        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        $mail->send();
                        echo "<script> alert('Thanks For Contact With Us Our One Of Admin Contact With You Soon!')
                        window.location='contact-us';
                        </script>";
                    }

                    catch (Exception $e)
                    {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }

                    //    if($chk)
                    //    {
                    //        echo "<script>
                    //        alert('Thanks For Contact With Us Our One Of Admin Contact You Soon!')
                    //        window.location='blog';
                    //        </script>";
                    //    }
               }
   
           //fetch data for user profile
           if(isset($_SESSION["usid"]))
           {
               $id=$_SESSION["usid"];
               $shwdata=$this->selectalldata('register_user','usid',$id);
           }

            //fetch data for product add by admin
            $product=$this->productalldata('adminadd_product');
   

        // Load Templets Routing
            if($_SERVER["PATH_INFO"])
            {
                switch($_SERVER["PATH_INFO"])
                {
                    case'/':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("content.php");
                        require_once("footer.php");
                        // require_once("slider.php");
                        break;


                    case'/category':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("category.php");
                        require_once("footer.php");
                        break;

                    case'/single-product':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("single-product.php");
                        require_once("footer.php");
                        break;

                    case'/checkout':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("checkout.php");
                        require_once("footer.php");
                        break;

                    case'/cart':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("cart.php");
                        require_once("footer.php");
                        break;
                        
                    case'/carts':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("emptycart.php");
                        require_once("footer.php");
                        break;

                    case'/confirmation':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("confirmation.php");
                        require_once("footer.php");
                        break;
                        
                    case'/blog':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("blog.php");
                        require_once("footer.php");
                        break; 

                    case'/single-blog':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("single-blog.php");
                        require_once("footer.php");
                        break; 

                    case'/login':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("login.php");
                        require_once("footer.php");
                        break;

                        case'/register':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("register.php");
                        require_once("footer.php");
                        break;

                    case'/tracking':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("tracking.php");
                        require_once("footer.php");
                        break;
                
                    case'/contact-us':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("contact.php");
                        require_once("footer.php");
                        break;

                    case'/profile-management':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("profile-management.php");
                        require_once("footer.php");
                        break;

                    case'/forget-password':
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("forget-password.php");
                        require_once("footer.php");
                        break;

                    default :
                        require_once("index.php");
                        require_once("navigation.php");
                        require_once("404.php");
                        require_once("footer.php");
                }
            }

    }
}
$obj=new Controller;

?>





<!-- 
require_once("model/model.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Controller extends Model
{

    public function __construct()
    {
        // Logic
        parent :: __construct();


        //add data in contact us in table logic
        if(isset($_POST["sub"]))
        {

        // Mailer Library
        if(isset($_POST["sub"]))
        {

            require_once("PHPMailer/PHPMailer.php");
            require_once("PHPMailer/SMTP.php");
            require_once("PHPMailer/Exception.php");


            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $ml=$_POST["email"];
            $mob=$_POST["phone"];
            $msg=$_POST["msg"];

            $mail = new PHPMailer(true);

            try
            {
                //Server settings
                $mail->SMTPDebug = False;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
                $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
                $mail->SMTPSecure = "TLS" ;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'Mail sending');
                $mail->addAddress('niravmovie04@gmail.com', 'Contact Us Mail sending');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/Temp2/Image/image1.jpg' ,'new.jpg');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Contact with us Email sending data';
                $mail->Body    = "<img src='https://cdn.dribbble.com/users/13543/screenshots/1523277/success.gif'>"."<br>"."Customer First Name Is :".$fnm."<br>"."Customer Last Name Is :".$lnm."<br>"."Customer email Is :".$ml."<br>". "Customer Phone Is :" .$mob."<br>"."Customer Message Is :".$msg."<br>"." Nirav's E-Commerse Pvt. Ltd. Contact Us Sending Emails "."<br>"."Contact Us On : (+91)-7894556123"."<br>"."Emailus: <a href ='mailto:niravmovie04@gmail.com'>nirav@gmail.com</a>";
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                echo "<script> alert('Thanks For Contact With Us Our One Of Admin Contact With You Soon!')
                window.location='email-successmsg';
                </script>";
            }

            catch (Exception $e)
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }


        //insert data logic for contact us 
            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $msg=$_POST["msg"];
            $data= array("Firstname"=>$fnm,"Lastname"=>$lnm,"Email"=>$em,"Phone"=>$phone,"Message"=>$msg);
            $chk=$this->insertalldata($data,'contect_us');
            if($chk)
            {
                echo "<script>
                alert('Thanks for contact with us we will contact with you soon!')
                window.location='contact-us';
                </script>";
                
            }
        }


        //insert data for Registration
        if(isset($_POST["register"]))
        {
            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $em=$_POST["email"];
            $pass=$_POST["pass"];
            $phone=$_POST["phone"];
            $add=$_POST["address"];
            $gender=$_POST["gender"];

            
            $data= array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"phone"=>$phone,"address"=>$add,"gender"=>$gender);
            $chk=$this->insertalldata($data,'registerusers');
            if($chk)
            {
                echo "<script>
                alert('You Are Register Successfully!')
                window.location='register';
                </script>";
                
            }
        }

         // user login here 
         if(isset($_POST["log"]))
         {
             $em=$_POST["email"];
             $pass=$_POST["password"];
             $log=$this->adminlogin('registerusers',$em,$pass);
             if($log)
             {
                 echo "<script>
                 alert('You are successfully Logged In!')
                 window.location='sunglass';
                 </script>"; 
             } 
             else 
             {
 
                 echo "<script>
                 alert('Your email and password incorrect try again!')
                 window.location='login';
                 </script>"; 
             }
         }
 
         // logout here
         if(isset($_GET["logout"]))
         {
             $lg=$this->logout();
             if($lg)
             {
                 echo "<script>
                 alert('Logout successfully!')
                 window.location='./';
                 </script>"; 
             }
         }
    }
}
$obj=new Controller;

?> -->