<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
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
.box{
    width:450px;
    height:600px;
    background:rgba(0,0,0,.4);
    padding:40px;
    text-align:center;
    margin:auto;
    color:white;
    font-family:'Century Gothic',sans-serif;
}
</style>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
            <li class="h"><a href="<?=base_url('welcome/index/haifa')?>">Home</a></li>
            <li class="h"><a href="<?=base_url('welcome/event')?>">Event</a></li>
            <li class="h"><a href="<?=base_url('welcome/gallery')?>">Gallery</a></li>
            <li class="h"><a href="<?=base_url('welcome/contact')?>">Contact</a></li>
            <li class="current_page_item"><a href="<?=base_url('welcome/profil')?>">My Profile</a></li>
			</ul>
        </div>
	</div>
</div>
<div class="box">
    <img style="width:200px;border-radius:10%;" src="<?=base_url()?>assets/pp.jpg" alt="">
    <h1>@danillariyadi</h1>
<h5>Artist</h5>
<p>Selain bermusik, saya pura-puaranya juga web developer hehe</p>
<p>Endorse saya please</p>
</div>
</body>
</html>