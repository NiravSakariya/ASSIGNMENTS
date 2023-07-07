<?php
class Model
{
    public $connection="";
    public function __construct()
    {
        session_start();
        // database connections
        // exception handeling 
        try
        {
            $this->connection=new mysqli("localhost","root","","footwear");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    
    }

    //Create a member function for insert data
        public function insertalldata($data,$table)
        {
    
            $column=array_keys($data);
            $column1=implode(",",$column);
    
            $value=array_values($data);
            $value1=implode("','",$value);
    
            $insert="insert into $table($column1)values('$value1')";
            $exe = mysqli_query($this->connection,$insert);
            return $exe;
    
        }

    //Create a member function for update data
        public function updatedata($table,$path,$fnm,$lnm,$em,$add,$phone,$column,$id)
        {

            $id=$_SESSION["usid"];
            $update="update $table set photo='$path',firstname='$fnm',lastname='$lnm',email='$em',phone='$phone',address='$add' where $column='$id'";
            $exe = mysqli_query($this->connection,$update);
            return $exe;

        }
 
    // create a member function for user login
        public function userlogin($table,$em,$pass)
        {
            $sel="select * from $table where email='$em' and password='$pass'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
            $_SESSION["usid"]=$fetch["usid"];
            $_SESSION["email"]=$fetch["email"];
            $_SESSION["firstname"]=$fetch["firstname"];

            return true;
            }
            else 
            {
            return false;
            }
        } 

    // create a member functionn for change Password
        public function changepassworddata($table,$opass,$npass,$cpass,$column,$id)
        {
            $id=$_SESSION["usid"];
            $select="select password from $table where $column='$id'";
            $exe=mysqli_query($this->connection,$select);
            $fetch=mysqli_fetch_array($exe);
            $pass=$fetch["password"];
            if($pass==$opass && $npass==$cpass)
            {
                $upd="update $table set password='$npass' where $column='$id'";
                $exe=mysqli_query($this->connection,$upd);
                return $exe;

            }

            else 
            {
            return false;
            }
        }

    // create a member function for forgetpassword
        public function frgpassword($table,$column,$em)
        {
            $select="select password from $table where $column='$em'";
            $exe=mysqli_query($this->connection,$select);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
                $pass=$fetch["password"];
                return $pass; 
            }
            else 
            {
                return false;
            }
        }

    // logout here to create a member function 
        public function logout()
        {
            unset($_SESSION["usid"]);
            unset($_SESSION["email"]);
            unset($_SESSION["firstname"]);
            session_destroy();
            return true;
        }

    // create a member function for fatch data for user profile
        public function selectalldata($table,$colum,$id)
        {
           $select="select * from $table where $colum='$id'";
            $exe=mysqli_query($this->connection,$select);
            while($fetch=mysqli_fetch_array($exe))
            {
             $arr[]=$fetch;
            }
            return $arr;
        }

    // create a member function for fetch data for add product  add by admin

        public function productalldata($table)
            {
                $select="select * from $table";
                $exe=mysqli_query($this->connection,$select);
                while($fetch=mysqli_fetch_array($exe))
                {
                $arr[]=$fetch;
                }
                return $arr;
            }

    // delete a data for users create a member function
        public function deletedata($table,$id)
        {
            $column=array_keys($id);
            $column1=implode(",",$column);

            $value=array_values($id);
            $value1=implode("','",$value);

            $delete="delete from $table where $column1='$value1'";
            $exe=mysqli_query($this->connection,$delete);
            return $exe;
        }
}

?>