<?php
include "header.php";

$cats = $admin->get_all_category();

?>

<div id="dashboard">
<!-- <img src="images/user.png"> <a class="projectbutton" href="newuser.php">Add user</a> -->


<?php foreach($cats as $cat){?>

    <div class="single_project">

        <h2 class="project_name">
            <?php echo $cat['category_description'] ?>
            <span><a class="button" href="newuser.php?id=<?php echo $cat['category_id'] ?>">Add user</a></span></h2>
            <ul class="projects">
        <?php
            $users = $user->get_users();



            foreach($users as $user){?>

                <?php if($user['user_category'] == $cat['category_id']){ ?>
                        
                        <li>
                              <a href="#" class="user"><?php $user['username']; ?></a>
                              <span class="del">
                                   <a href="#" class="drop" alt="Something" title="Delete user"><img src="images/del.png" /></a>
                              </span>
                              <span class="edit">
                                  <a href="edituser.php" class="drop" alt="Something" title="Edit user"><img src="images/edit.png" /></a>
                              </span>
                        </li>
                        
               <?php } else{

                   echo "<li></li>";
               }?>


            <?php    } ?>
           </ul>


        

    </div>

 <?php   }?>


</div> <!-- End dashboard -->

<?php include "footer.php"; ?>