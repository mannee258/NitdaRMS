<?php


session_start();

include('database/config.php');


$query = "SELECT * FROM users";
$querycheck = mysqli_query($conn, $query);
$query_run = mysqli_fetch_array($querycheck);

if(isset($_POST['riskbtn']))
  {
      $asset = $_POST['asset'];
      $risk_owner = $_POST['riskowner'];
      $asset_cat = $_POST['category'];
      $nature = $_POST['nature'];
      $vul = $_POST['vul'];
      $threat = $_POST['threat'];
      $user_id = $query_run['id'];



            $query = "INSERT INTO risks (user_id,asset,risk_owner,asset_cat,risk_nat,vul,threat) VALUES ('$user_id','$asset','$risk_owner','$asset_cat','$nature','$vul','$threat')";
            $query_run = mysqli_query($conn, $query);

            if($query_run)
            {
                //echo "Saved";
                $_SESSION['status'] = "Submited";
                $_SESSION['status_code'] = "success";
                header('location: index.php');

            }
            else
            {
                //echo "Not Saved";
                $_SESSION['status'] = "Failed to submit";
                $_SESSION['status_code'] = "error";
                header('location: index.php');
            }
      }





    //   if(isset($_POST['updatebtn']))
    //     {
    //         $id = $_POST['edit_id'];
    //         $firstname = $_POST['edit_firstname'];
    //         $lastname = $_POST['edit_lastname'];
    //         $email = $_POST['edit_email'];
    //         $password = $_POST['edit_password'];
    //
    //
    //               $query = "UPDATE admin SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' WHERE id='$id' ";
    //               $query_run = mysqli_query($conn, $query);
    //
    //               if($query_run)
    //               {
    //                   //echo "Saved";
    //                   $_SESSION['status'] = "Admin profile updated";
    //                   $_SESSION['status_code'] = "success";
    //                   header('location: register.php');
    //
    //               }
    //               else
    //               {
    //                   //echo "Not Saved";
    //                   $_SESSION['status'] = "Admin profile failed to update";
    //                   $_SESSION['status_code'] = "error";
    //                   header('location: register.php');
    //               }
    //             }
    //
    //             if(isset($_POST['deletebtn']))
    //               {
    //                   $id = $_POST['delete_id'];
    //
    //
    //
    //                         $query = "DELETE FROM admin WHERE id=$id";
    //                         $query_run = mysqli_query($conn, $query);
    //
    //
    //                         if($query_run)
    //                         {
    //                             //echo "Saved";
    //                             $_SESSION['status'] = "Admin profile deleted";
    //                             $_SESSION['status_code'] = "success";
    //                             header('location: register.php');
    //
    //                         }
    //                         else
    //                         {
    //                             //echo "Not Saved";
    //                             $_SESSION['status'] = "Admin profile failed to delete";
    //                             $_SESSION['status_code'] = "error";
    //                             header('location: register.php');
    //                         }
    //                       }
    //
    //
    //                         if(isset($_POST['loginbtn']))
    //                           {
    //                               $email_login = $_POST['email'];
    //                               $password_login = $_POST['password'];
    //
    //
    //                                     $query = "SELECT * FROM admin WHERE email='$email_login' && password='$password_login' ";
    //                                     $query_run = mysqli_query($conn, $query);
    //
    //
    //                                     if(mysqli_fetch_array($query_run))
    //                                     {
    //                                         //echo "Saved";
    //                                         $_SESSION['firstname'] = $email_login;
    //                                         header('location: dashboard.php');
    //
    //                                     }
    //                                     else
    //                                     {
    //                                         //echo "Not Saved";
    //                                         $_SESSION['status'] = "Email or Password Incorrect";
    //                                         header('location: index.php');
    //                                     }
    //                                   }
    //
    //
    //
      // if(isset($_POST['editbtn']))
      // {
      //   $id = $_POST['edit_id'];
      //
      //   $query ="SELECT * FROM admin WHERE id='$id' ";
      //   $query_run= mysqli_query($conn, $query);
      // }
   ?>
