

<?php
                  if (isset($_POST['upload'])) 
                  {
                                $filename = basename($_FILES["file"]["name"]);
                                $tempname = $_FILES["file"]["tmp_name"];    
                                $folder = __DIR__ . "/uploads/".$filename;
                                $email=$_SESSION['email']; 
                                $sql = "insert into image (`filename`,`email`) values ('$filename','$email')";
                                mysqli_query($link, $sql);
                                if (move_uploaded_file($tempname, $folder))  
                                {
                                    echo "<script>swal('Thank You!','your detail updated', 'success');</script>";
                                    echo '<script> location.href = "admin_dashboard.php" </script>';
                                }else
                                {
                                    echo "<script>alert('Not Uploaded')</script>";
                                    echo '<script> location.href = "admin_dashboard.php" </script>';
                                }
                    }
?>