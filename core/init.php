<?php 
require_once __DIR__ . '/../vendor/autoload.php';
use course\Course as Course;
add_action('admin_menu',function(){
$page_title = 'Course Manager';
$menu_title = 'Course Manager';
$capability = 'manage_options';
$menu_slug = 'cmanager';
$icon_url  = plugins_url('../assets/images/course_icon.png', __FILE__ );
add_utility_page( $page_title, $menu_title, $capability, $menu_slug, function(){

$course = new Course();
$course->Ui('ui.php');


},$icon_url);

});
?>
