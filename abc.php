<?php
include 'manish.php';

$name=$phone=$email=$Yourmessage="";

if(!empty($_POST['name']))
{
    if(!preg_match("/^[a-zA-Z\s]+$/",$_POST['name']))
    {
        echo "This can contain only characters";
    }
    else
    {
       
        $name = $_POST['name'];
        echo "name of student",$name;
        echo "<br>";
    }
}

else{

    echo "This is compulsary";
}




if (!empty($_POST['phone']))
{
  if(strlen($_POST['phone'])===10){
    if (!preg_match("/^[0-9]+$/",$_POST['phone']))
   
    {
      echo "this field contains only number";
    
    }
    else{
      $phone=$_POST['phone'];
    }
  }
  else{
    echo "should be 10 digit no.";
  }
}
else{
   echo "this field is mandatory";
}




if(!empty($_POST['email']))
    {
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            $email = $_POST['email'];
        }
        else{
            echo "invalid email";
        }
    }
    else{
        echo "This is compulsary";
    }

    $Yourmessage= $_POST['txt'];

$sql="INSERT INTO contact(name,phone,email,Yourmessage)
VALUES('$name','$phone','$email','$Yourmessage')";

$result=mysqli_query($conn,$sql) or die("Failed");
if($result){
    echo "Data inserted successfully";
}else{
    echo "Data did not inserted successfully";
}

?>