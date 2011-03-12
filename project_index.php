<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('classes/MySqlDb.php');
require_once ('classes/Projects.php');

//$db = new MysqlDB('localhost', 'bree', 'password', 'taskerdb');

$proj = new Projects();

//$proj->get_all_projects();

$all_projects = $proj->get_all_projects();
print_r($all_projects);


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
