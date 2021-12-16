<?php
// extract($_POST);
// echo $_POST;
include("database.php");
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

if($pass==$cpass)
{
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
    if(mysqli_num_rows($sql)>0)
    {
        // echo "Email Already Exists";
        header ("Location: reg.php?status=eae");
    }
    else
    {   $_SESSION['save']=($_POST['save']);
        $sql=mysqli_query($conn,"INSERT INTO register(First_Name,Last_Name,Email,Passwordz) VALUES('$first_name','$last_name','$email','$pass')");
        if($sql)
        {
            // echo "Registration Successful";
            header ("Location: login.php?status=success");
        }
        else
        {
            // echo "Registration Failed";
            header ("Location: reg.php?status=failed");
        }
    }

}

else
{
    // echo "Password and Confirm Password does not match";
    header ("Location: reg.php?status=mismatch");
}

// else(isset($_POST['save']))
// {
//     // $file = rand(1000,100000)."-".$_FILES['file']['name'];
//     // $file_loc = $_FILES['file']['tmp_name'];
//     // $folder="upload/";
//     // $new_file_name = strtolower($file);
//     // $final_file=str_replace(' ','-',$new_file_name);
//     // if(move_uploaded_file($file_loc,$folder.$final_file))

//         $query="INSERT INTO register(First_Name, Last_Name, Email, Passwordz ) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)')";
//         $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        
// }
// else 
// {
// 	echo "Error.Please try again";
// }

?>