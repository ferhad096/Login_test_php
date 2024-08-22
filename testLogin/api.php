<?php

        if(isset($_POST['act']) & !empty($_POST['act'])){
            require "connection.php";
            $act = $_POST['act'];
            if($act == 'login'){
                $usern= $_POST['username'];
                $pass= md5($_POST['pass']);

                $query="SELECT * FROM users WHERE username = '".$usern."' and pass = '".$pass."' LIMIT 1";
                $run  = mysqli_query($con,$query);
                if(mysqli_num_rows($run)>0){
                    $get = mysqli_fetch_array($run);
                    session_start();
                    $_SESSION['id'] = $get['id'];
                    $_SESSION['ad'] = $get['ad'];
                    $_SESSION['soyad'] = $get['soyad'];
                    $_SESSION['username'] = $get['username'];
                    header("Location: cabinet.php");
                }else{
                    echo "Ugursuz giris";
                }
            }
            if($act == "signup"){
                
                $ad= $_POST['fname'];
                $soyad= $_POST['lname'];
                $usern= $_POST['username'];
                $pass= md5($_POST['pass']);
                $query = "INSERT INTO users(ad,soyad,username,pass)
                    VALUES ('".$ad."','".$soyad."','".$usern."','".$pass."')
                ";
                try{
                    session_start();
                    $_SESSION['ad'] = $ad;
                    $_SESSION['soyad'] = $soyad;
                    $_SESSION['username'] = $usern;
                    
                    mysqli_query($con,$query);
                    header("Location: cabinet.php");
                }catch(Exception $e){
                    echo "error";
                }
                }
        }else{
            echo "act not defined";
        }