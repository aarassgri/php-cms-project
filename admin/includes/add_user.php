<?php
// INSERTING USER INTO DB
if(isset($_POST['create_user'])){
    // echo $_POST['title'];

    $user_firstname= $_POST ['user_firstname'];
    $user_lastname = $_POST ['user_lastname'];
    $user_role = $_POST ['user_role'];

    // $user_image = $_FILES['image']['name'];
    // $user_image_temp = $_FILES['image']['tmp_name'];

    $username = $_POST ['username'];
    $user_email = $_POST ['user_email'];
    $user_password = $_POST ['user_password'];
    // $user_date = date('d-m-y');
    
    // move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";

    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') ";
    

    $create_user_query = mysqli_query($connection,$query);
    
    confirmQuery($create_user_query);


}

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>






    <div class="form-group">
        <select name="user_role" id="">
        <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
        </select>
    </div>
 
   
    <!-- <div class="form-group">
        <label for="post_image"></label>
        <input type="file" name="image">
    </div> -->
    <div class="form-group">
        <label for="post_tags">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="post_tags">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="post_tags">Password</label>
        <input type="text" class="form-control" name="user_password">
    </div>


    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_user" value="Add User">
    </div>

</form>