<?php
    $showError="false";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
       include 'partials/_dbconnect.php';

        $name=$_POST['name'];
        $email=$_POST['email'];
        $cat=$_POST['cat'];
        $issue=$_POST['issue'];
        $date=$_POST['date'];
    
        $existSql= "SELECT * FROM `issueform` WHERE username='$name'";
        $result=mysqli_query($conn,$existSql);
        if($result>0){
            $showError="..";
        }
        else {
                $sql="INSERT INTO `issueform` (`name`, `email`,  `cat`, `issue`, `date`) VALUES ( '$name','$email','$cat','$issue','$date')";
                $result=mysqli_query($conn,$sql);
               if($result){
                        $showAlert=true;
                        header("Location:/forum/about1.php?Submitsuccess1=true");
                        exit();
               }
        }
        header("Location:/forum/about1.php?Submitsuccess1=false&error=$showError");
         }
        ?>