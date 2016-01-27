<head>

<?php  

$this->style('main.css'); 
$this->style('materialize.min.css');


?>


</head>
<body>
<!-- Logo text -->
<div class="container-fluid">
	<div class="row">
		<div class="col m12">
			<!-- Logo Image -->
			<?php $this->image('imac.svg','log1'); ?>
		</div>
	</div>
    <div class="row">
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    </div>
       <div class="row">
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    </div>
       <div class="row">
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    	<div class="col m3"><?php echo $this->card("map.jpg","the title","Lorem Ipsum hai");?></div>
    </div>

</div>


</body>