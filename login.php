<?php
            //$msg = '';
            
   if (isset($_POST['send']) && !empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            
      if (($_POST['id'] == 'admin01' && $_POST['email'] == 'admin01@gmail.com' && $_POST['password'] == 'admin01')||( $_POST['id'] == 'admin02' && $_POST['email'] == 'admin02@gmail.com' && $_POST['password'] == 'admin02')||(  $_POST['id'] == 'admin03' && $_POST['email'] == 'admin03@gmail.com' && $_POST['password'] == 'admin03')) {
         // $_SESSION['valid'] = true;
         // $_SESSION['timeout'] = time();
         // $_SESSION['id'] = 'admin01';
                  
         header("location:admin.php");
      }else {
         echo "<script>alert('Failure!'); window.location.href='index.php';</script>";
      }
   }
?>