<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('classes/MySqlDb.php');
require_once ('classes/Projects.php');

//$db = new MysqlDB('localhost', 'bree', 'password', 'taskerdb');

//create new Projects object
$proj = new Projects();

//test get_all_projects()
$all_projects = $proj->get_all_projects();
print_r($all_projects);
?>

<hr>

<?php
//test create_project()
//$name = 'Update Me';
//$description = 'candy apples';
//$owner = '1';
//$status = '1';
//$priority = '1';
//$due_date = '2011-03-14 17:00:00';
//$proj->create_project($name, $description, $owner, $status, $priority, $due_date);
?>

<hr>

<?php
//test is_project_owner()
$project_id = 1;
$_SESSION['user_id'] = 1;
$proj->is_project_owner($project_id, $_SESSION['user_id']);
?>

<hr>

<?php
//test get_project_by_id()
$project = $proj->get_project_by_id($project_id);
print_r($project);
?>

<hr>

<?php
//test update_project()
$project_id = 4;

$insertData = array(
    'name' => 'Birthday Brownies',
    'description' => 'Make Birthday Brownies for David.',
    'owner' => '1',
    'status' => '2',
    'priority' => '3',
    'due_date' => '2011-03-13 12:00:00',
    'deleted' => '0'

);

$update = $proj->update_project($project_id, $insertData);


?>

<html>
    <head>
        <title>Create Project</title>
    </head>
    <body>
        <h1>Create Project</h1>
        <form action="create_project.php" method="post" >
            Project Name: <input type="text" />
            Project Description: <textarea />
            <input type="submit" />
        </form>
    </body>
</html>
