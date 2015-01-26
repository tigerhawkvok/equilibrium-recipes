<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta name="theme-color" content="#cae682"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if($_REQUEST['view']!='p') { ?>
    <link rel='stylesheet' type='text/css' title='Main CSS'
    href='main.css' media='screen'/> <?php } ?>
    <link rel='stylesheet' type='text/css' title='Print CSS' href='print.css'
    media='<?php if($_REQUEST['view']=='p') echo "all"; else echo
    "print,handheld"; ?>'/>
    <link rel='stylesheet' type='text/css' title='Bootstrap' href='bower_components/bootstrap/dist/css/boostrap.min.css' />
    <link rel="icon" type="image/png" href="icon.png" />
  </head>
  <body>
    <div id='supercontainer'>
      <div id='container'>
	<div id='title'>
	  <h1>
	    <?php echo $title; ?>
	  </h1>
	  <!-- Google custom Search -->
	  <form action="http://www.google.com/cse" id="cse-search-box">
	    <div>
	      <input type="hidden" name="cx" value="003771878092582119336:vpnpkeintts" />
	      <input type="hidden" name="ie" value="UTF-8" />
	      <input type="submit" name="sa" value="Search" />
	      <input type="text" name="q" size="31" />
	    </div>
	  </form>
	  <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
	  <br/>
      <p class='clear'><a href='index.php'>Root Page</a> | <a href='https://github.com/tigerhawkvok/equilibrium-recipes'>GitHub &#187;</a> | <a href='http://www.quantum-immortal.net/rspradley/recipes/root.php'>Kit &amp; Rachael&#39;s site &#187;</a></p>
	</div>
	<p id='printview'>
	  <a href='?view=<?php if($_REQUEST['view']=='p') echo 's';
			       else echo 'p'; ?>'><?php if($_REQUEST['view']!='p') echo
							"Print"; else echo "Standard"; ?> View</a>
	</p>
