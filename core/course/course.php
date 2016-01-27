<?php
namespace course;
class Course
{
     protected $file;
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
	private function card($cimage,$title,$content)
	{

      echo '<div class="card">
            <div class="card-image">
              <img src="'.plugins_url('../../assets/images/', __FILE__ ).$cimage.'">
              <span class="card-title">'.$title.'</span>
            </div>
            <div class="card-content">
              <p>'.$content.'</p>
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
