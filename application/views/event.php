<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event</title>
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

    table{
        border-collapse:collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        width: 70%;
        margin: 0 auto;
        position: relative;
        border-spacing: 1;
        margin-top: 90px;
    }

    thead tr {
    height: 60px;
    background: #e97874;
    color: white;
    }
    
    tbody tr{
        font-family: 'OpenSans-Regular';
        font-size: 20px;
        color: #262626;
        line-height: 1.2;
        font-weight: unset;
    }

    tbody tr:hover {
    color: #555555;
    background-color: #f5f5f5;
    cursor: pointer;
    }
    
</style>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
            <li class="h"><a href="<?=base_url('welcome/index/haifa')?>">Home</a></li>
            <li class="current_page_item"><a href="<?=base_url('welcome/event')?>">Event</a></li>
            <li class="h"><a href="<?=base_url('welcome/gallery')?>">Gallery</a></li>
            <li class="h"><a href="<?=base_url('welcome/contact')?>">Contact</a></li>
            <li class="h"><a href="<?=base_url('welcome/profil')?>">My Profile</a></li>
			</ul>
        </div>
	</div>
</div>
<div class="wrapper-table">
<table border="1">
    <thead>
    <tr>
        <th>Event</th>
        <th>Tempat</th> 
        <th>Tanggal</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Jakarta Fasion Season</td>
        <td>GBK</td> 
        <td>12 Mei 2019</td>
    </tr>
    <tr>
        <td>Malang Creative To Night</td>
        <td>Malang Town Square</td> 
        <td>20 July 2019</td>
    </tr> 
    <tr>
        <td>We Young We Fun</td>
        <td>UMM Dome</td> 
        <td>1 December 2019</td>
    </tr> 
    </tbody>
</table>
</div>
</body>
</html>