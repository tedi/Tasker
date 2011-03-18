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
        <li><a href="#" class="user">Bree</a> <span class="del"><a href="#"class="drop" title="Delete user"><img src="images/del.png"></a></span> <span class="edit"><a href="edituser.php" class="drop" title="Edit user"><img src="images/edit.png"></a></span></li>
        <li><a href="#" class="user">David</a> <span class="del"><a href="#"class="drop" title="Delete user"><img src="images/del.png"></a></span> <span class="edit"><a href="edituser.php" class="drop" title="Edit user"><img src="images/edit.png"></a></span></li>
        <li><a href="#" class="user">Melisa</a> <span class="del"><a href="#"class="drop" title="Delete user"><img src="images/del.png"></a></span> <span class="edit"><a href="edituser.php" class="drop" title="Edit user"><img src="images/edit.png"></a></span></li>
        <li><a href="#" class="user">Thomas</a> <span class="del"><a href="#"class="drop" title="Delete user"><img src="images/del.png"></a></span> <span class="edit"><a href="edituser.php" class="drop" title="Edit user"><img src="images/edit.png"></a></span></li>
        <li><a href="#" class="user">Tedi</a> <span class="del"><a href="#"class="drop" title="Delete user"><img src="images/del.png"></a></span> <span class="edit"><a href="edituser.php" class="drop" title="Edit user"><img src="images/edit.png"></a></span></li>
        </ul>

    </div>

 <?php   }?>


</div> <!-- End dashboard -->

<?php include "footer.php"; ?>