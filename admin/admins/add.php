<?php
    require_once '../../config.php';
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';

?>

<?php 
   
   if(isset($_POST['submit']))
   {
       $name     = $_POST['name'];
       $password = $_POST['password'];
       $email    = $_POST['email'];

       if(chechEmpty($name) AND chechEmpty($email) AND chechEmpty($password))
       {
           if(validEmail($email))
           {
               $hashedPassword = password_hash($password , PASSWORD_DEFAULT);


               $sql = "INSERT INTO admins (`admin_name` , `admin_email` , `admin_password`)
                        VALUES ('$name' , '$email' , '$hashedPassword') ";
               $success_message = db_insert($sql);   
                
                
           } else {
             $error_message = "Please type correct email";
       }
        
       } else {
            $error_message = "Please fill all fildes";
       }

       require_once BL.'functions/messages.php';

    }
 
?>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>














<?php
   require_once BLA.'inc/footer.php';
?>