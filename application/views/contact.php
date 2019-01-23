<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
    
    </style>
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

    div.konten{
    background: rgba(233, 120, 116,.5);
    width: 420px;
    height: 400px;
    margin: 100px auto 40px;
    border-radius: 12px;
    min-height: 256px;
    overflow: hidden;
  }

  div.kepala{
    background: #B0C4DE;
    padding: 10px 22px;
    height: 60px;
  }

  div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
    padding-left: 60px;
  }
  .judul{
    margin: 13px 70px 0;
  }
  div.artikel{
    padding:10px 22px 0;
    color: #fff;
    margin: 16px 0;
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
            <li class="current_page_item"><a href="<?=base_url('welcome/contact')?>">Contact</a></li>
            <li class="h"><a href="<?=base_url('welcome/profil')?>">My Profile</a></li>
			</ul>
        </div>
	</div>
</div>
<div class="konten">
        <div class="kepala">
            <h2 class="judul">Contact Us</h2>
        </div>
        <br>
        <div class="artikel">
          <p>Email : Welcome_ide@gmail.com</p>
          <br>
          <p>Nomor : 08123456789 / (021)-234-678-321</p>
          <br>
          <p>Whatsapp: 082123234345</p>
        </div>
    </div>
</body>
</html>