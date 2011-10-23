<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="imagetoolbar" content="no"/>
    <title>PHPConPL 2011 WhiskeyContest</title>
    <?php echo HTML::style('css/reset.css', array('media' => 'screen')); ?>
    <?php echo HTML::style('css/screen.css', array('media' => 'screen')); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper clear">
  		<h1>PHPConPL 2011 WhiskeyContest</h1>
  		<div id="menu" class="clear">
  			<ul>
  			<?php foreach ( $menu as $position):  $liclass = ( $position['active'] )? ' class="active"': ''; ?>
  				<li<?php echo $liclass?>><?php echo HTML::anchor('/'.$position['url'], $position['name']);?></li>
  			<?php endforeach;?>
  			</ul>
  		</div>
  			
		<div id="main" class="clear">

			<?php echo $body; ?>
	
		</div>
				
		<div id="footer" class="clear">
			<p>2011 | <a href="http://www.phpcon.pl/2011/" title="PHPConPL 2011">PHPConPL 2011</a> | WhiskeyContest</p>
		</div>
	</div>
</body>
</html>