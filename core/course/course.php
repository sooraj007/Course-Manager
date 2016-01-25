<?php
namespace course;
class Course
{

	public function __construct()
	{
			
	}
	private function Style($css)
	{
		echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('../../assets/css/', __FILE__ ).$css.'">';
	}
	private function Image($image,$class)
	{
		echo '<img src="'.plugins_url('../../assets/images/', __FILE__ ).$image.'" class="'.$class.'">';
	}
	private function card($cimage)
	{

      echo '<div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>  ';


	}
	public function Ui($ufile)
	{
	  require $ufile;
 	}

}
