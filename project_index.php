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
echo '<h4>test get_all_projects()</h4>';
/*
$all_projects = $proj->get_all_projects();
print_r($all_projects);
 * 
 */
?>

<hr>

<?php
echo '<h4>test create_project()</h4>';
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
echo '<h4>test is_project_owner()</h4>';
/*
$project_id = 1;
$_SESSION['user_id'] = 1;
$proj->is_project_owner($project_id, $_SESSION['user_id']);
 * 
 */
?>

<hr>

<?php
//test get_project_by_id()
echo '<h4>test get_project_by_id()</h4>';
/*
$project = $proj->get_project_by_id($project_id);
print_r($project);
 * 
 */
?>

<hr>

<?php
//test update_project()
echo '<h4>test update_project()</h4>';
/*
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
 * 
 */

?>

<hr>

<?php
//test delete_project()

echo '<h4>test delete_project()</h4>';
/*
$project_id = 4;

$proj->delete_project($project_id);
 *
 */

?>

<hr>

<?php
//test get_projects_by_owner()
echo '<h4>test get_projects_by_owner()</h4>';
/*
$user_id = 1;

$projects_by_owner = $proj->get_projects_by_owner($user_id);
print_r($projects_by_owner);
 *
 */

?>

<hr>

<?php
//test get_assigned_projects
echo '<h4>test get_assigned_projects()</h4>';

$user_id = 1;

$result = $proj->get_assigned_projects($user_id);

print_r($result);

?>

<html>
    <head>
        <title>Test Project Class</title>
    </head>
    <body>
        <!--h1>Create Project</h1>
        <form action="create_project.php" method="post" >
            Project Name: <input type="text" />
            Project Description: <textarea />
            <input type="submit" />
        </form-->
    </body>
</html>
