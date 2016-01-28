<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<?php  

$this->style('main.css'); 
$this->style('typeit.css'); 
$this->style('materialize.min.css');
$this->script('jquery.js');
$this->script('typeit.js');
$this->script('angular-min.js');


?>


</head>
<body>
<!-- Logo text -->
<div class="row-fluid">
	<div class="row">
		<div class="col m12">
			<!-- Logo Image -->
			<?php $this->image('imac.svg','log1'); ?><br><br>
			<span class="ltext z-depth-2"><span class="fa fa-code" style="color:yellow"></span><span class="type-it"></span>  </span>

		</div>
	</div>
    <div class="row">
    	<div class="col m3"><?php echo $this->card("1.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("2.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("3.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("4.jpg","The title","Lorem Ipsum hai");?></div>
    </div>
       <div class="row">
    	<div class="col m3"><?php echo $this->card("5.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("6.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("7.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("8.jpg","The title","Lorem Ipsum hai");?></div>
    </div>
       <div class="row">
    	<div class="col m3"><?php echo $this->card("9.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("10.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("11.jpg","The title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("12.jpg","The title","Lorem Ipsum hai");?></div>
    </div>

</div>
<?php 
$this->script('main.js');
?>
</body>