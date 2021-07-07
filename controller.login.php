<?php


session_start();

include('database/config.php');
include('includes/security.php');



                            if(isset($_POST['loginbtn']))
                              {
                                  $email_login = $_POST['email'];
                                  $password_login = $_POST['password'];


                                        $query = "SELECT * FROM users WHERE email='$email_login' && password='$password_login' ";
                                        $query_run = mysqli_query($conn, $query);

                                        $is_admin = mysqli_fetch_array($query_run);

                                        if($is_admin)
                                        {
                                            //echo "Saved";
                                            $_SESSION['username'] = $is_admin['username'];
                                            header('location: index.php');
                                          }
                                        else
                                        {
                                            //echo "Not Saved";
                                            $_SESSION['status'] = "Invalid Email Or Password";
                                            $_SESSION['status_code'] = "error";
                                            header('location: login.php');
                                        }
                                      }





























                                      //   if($is_admin['is_admin'] == "2")
                                      //   {
                                      //       //echo "Saved";
                                      //       $_SESSION['username'] = $is_admin['username'];
                                      //       header('location: ./sadmin/dashboard.php');
                                      //
                                      //   }elseif ($is_admin['is_admin'] == "1") {
                                      //     // code...
                                      //     $_SESSION['username'] = $is_admin['username'];
                                      //     header('location: ./admin/dashboard.php');
                                      //
                                      //   }elseif ($is_admin['is_admin'] == "0") {
                                      //     // code...
                                      //     $_SESSION['username'] = $is_admin['username'];
                                      //     header('location: index.php');
                                      //
                                      //   }
                                      //   else
                                      //   {
                                      //       //echo "Not Saved";
                                      //       $_SESSION['status'] = "Email or Password Incorrect";
                                      //       header('location: login.php');
                                      //   }
                                      // }



      // if(isset($_POST['editbtn']))
      // {
      //   $id = $_POST['edit_id'];
      //
      //   $query ="SELECT * FROM admin WHERE id='$id' ";
      //   $query_run= mysqli_query($conn, $query);
      // }
    ?>
