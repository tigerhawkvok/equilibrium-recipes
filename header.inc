<?php
include('browser.inc');
$contenttype = "<?xml version='1.0' encoding='utf-8' ?>\n";
if(browser_detection('browser')=='ie')
  {
    if (browser_detection('number')<9)
      {
	$mime_type = "text/html"; // hide through IE8
	$contenttype="";
      }
  }
else $mime_type = "application/xhtml+xml";
header("Content-Type: $mime_type;charset=utf-8");
header("Vary: Accept");
echo $contenttype;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta name="theme-color" content="#cae682"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php
       if(browser_detection('browser')=='ie')
         {
          echo "<meta http-equiv='Content-Type' content='$mime_type;charset=utf-8' />\n<meta http-equiv='X-UA-Compatible' content='chrome=1' />";
         }
       ?>
    <?php if($_REQUEST['view']!='p') { ?>
    <link rel='stylesheet' type='text/css' title='Main CSS' href='main.css' media='screen'/>
    <link rel='stylesheet' type='text/css'  href='bower_components/bootstrap/dist/css/bootstrap.min.css' media='screen'/> 
    <?php } ?>
    <link rel='stylesheet' type='text/css' title='Print CSS' href='print.css'
    media='<?php if($_REQUEST['view']=='p') echo "all"; else echo
    "print,handheld"; ?>'/>
    <link rel="icon" type="image/png" href="icon.png" />
  </head>
  <body>
    <div id='supercontainer'>
      <div id='container' class="container">
        <header id="title" class="row">
	  <h1 class="col-xs-12">
	    <?php echo $title; ?>
	  </h1>
          <!-- Google custom Search -->
          <form action="http://www.google.com/cse" id="cse-search-box" class="col-md-6 col-sm-12 col-xs-12 pull-right form-inline hidden-xs hidden-sm" style="margin-bottom:10px">
	    <div class="form-group">
	      <input type="hidden" name="cx" value="003771878092582119336:vpnpkeintts" />
	      <input type="hidden" name="ie" value="UTF-8" />
              <label for="q" class="sr-only">Search Recipes</label>
	      <input type="text" name="q" class="form-control" id="q" />
	    </div>
            <button type="submit" name="sa" class="btn btn-default">Search</button>
          </form>
          <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
          <p class="col-md-6 col-sm-12">            
            <a href='index.php'>Root Page</a> | <a href='https://github.com/tigerhawkvok/equilibrium-recipes'>GitHub &#187;</a> | <a href='http://www.quantum-immortal.net/rspradley/recipes/root.php'>Kit &amp; Rachael&#39;s site &#187;</a> 
          </p>
        </header>
	<p id='printview' class="hidden-xs hidden-sm">
	  <a href='?view=<?php if($_REQUEST['view']=='p') echo 's';
			       else echo 'p'; ?>'><?php if($_REQUEST['view']!='p') echo
							"Print"; else echo "Standard"; ?> View</a>
	</p>
        <br class="visible-xs-block visible-sm-block clearfix"/>
