<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<style>
body
	{
		margin: 0px;
		padding: 0px;
		background: #333333;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 12pt;
		font-weight: 300;
		color: #000000;
	}

    #header-wrapper
{
    overflow: hidden;
    padding: 1em 0em;
    background: #B0C4DE no-repeat center;
    background-size: cover;
}
	
	#menu ul
	{
		text-align: center;
	}
	
	#menu li
	{
		display: inline-block;
	}
	
	#menu li a, #menu li span
	{
		display: inline-block;
		margin-left: 0.50em;
		padding: 1em 1.5em;
		letter-spacing: 0.20em;
        font-size: 0.90em;
        text-decoration: none;
		font-weight: 600;
		text-transform: uppercase;
		outline: 0;
		color: #FFF;
	}
	
	#menu .current_page_item a
	{
		background: #e97874;
		color: #FFF;
    }
  
    .h :hover{
    background-color: rgba(220, 220, 220,.5);
    cursor: pointer;
	}

.wrapper {
  display: grid;
}
.one {
  grid-column: 1;
  grid-row: 1/2;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g1.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid #ccc;
}
.two { 
  grid-column: 2;
  grid-row: 1/2;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g2.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid white;
}
.three {
  grid-column: 3;
  grid-row: 1/2;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g3.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid #ccc;
}
.four {
  grid-column: 1;
  grid-row: 3/4;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g4.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid white;
}
.five {
  grid-column: 2;
  grid-row: 3/4;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g5.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid #ccc;
}
.six {
  grid-column: 3;
  grid-row: 3/4;
  overflow: hidden;
  padding: 15em 0em;
  background: #B0C4DE url("<?= base_url('assets/g6.jpg') ?>") no-repeat center;
  background-size: cover;
  border: 10px solid white;
}
</style>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
            <li class="h"><a href="<?=base_url('welcome/index/haifa')?>">Home</a></li>
            <li class="h"><a href="<?=base_url('welcome/event')?>">Event</a></li>
            <li class="current_page_item"><a href="<?=base_url('welcome/gallery')?>">Gallery</a></li>
            <li class="h"><a href="<?=base_url('welcome/contact')?>">Contact</a></li>
            <li class="h"><a href="<?=base_url('welcome/profil')?>">My Profile</a></li>
			</ul>
        </div>
	</div>
</div>
<div class="wrapper">
  <div class="one"></div>
  <div class="two"></div>
  <div class="three"></div>
  <div class="four"></div>
  <div class="five"></div>
  <div class="six"></div>
</div>
</body>
</html>