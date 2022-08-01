<?php include('partials/menu.php'); ?>

<!-- body-content -->
<div class="page-one-container move">
 <h1 class="page-one-header-text">Add Admin</h1><br>

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

        <section class="label-container">
         <label for="fullname" class="username">Full Name</label><br>
         </section>
                    <input type="text" name="full_name" class="username-input" placeholder="Enter Your Name">
        <section class="label-container">
         <label for="username" class="username">Username</label><br>
        </section>
                    <input type="text" name="username" class="username-input" placeholder="Your Username">
                    <section class="label-container">
         <label for="password" class="password">Password</label><br>
         </section>
                    <input type="password" name="password" class="password-input" placeholder="Your Password">
                <br><br>

                <tr>
                    
                        <input type="submit" name="submit" value="Add Admin" class="btn">
                
                </tr>

            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php 
   

    if(isset($_POST['submit']))
    {
        

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); 

        $sql = "INSERT INTO tbl_admin SET 
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)
        {
            
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
           
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    
?>