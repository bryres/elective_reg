<?php
require_once('util/main.php');
require_once('util/tags.php');
require_once('model/database.php');
require_once('model/course_db.php');

// Get the course list
$courseList = get_course_list();

// Display the home page
include('home_view.php');
?>