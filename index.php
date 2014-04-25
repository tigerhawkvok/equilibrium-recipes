<?php
$title='Recipe List';
include('header.inc');
?>
<h3> Current Recipes: </h3>
<?php

function array_multimerge($a1,$a2)
{
  /*
   * Takes an array with duplicate keys and renames the keys.
   */
  $r = is_array($a1) ? $a1:array();
  if(is_array($a2))
    {
      foreach($a2 as $k=>$v)
        {
          $skip = false;
          if(key_exists($k,$r) && !is_numeric($k))
            {
              $i=2;
              $kt = $k+"-"$i;
              while(key_exists($kt,$r))
                {
                  $i++;
                  $kt = $k+"-"$i;
                }
              $k = $k+"-"+$i;
            }
          else if (key_exists($k,$r) && is_numeric($k))
            {
              $r[]=$v;
              $skip = true;
            }
          if(!$skip) $r[$k]=$v;
        }
    }
  return array_unique($r);
}

function includeTarget($url)
{
  try
    {
      $opts = array(
        'http'=>array(
          'method'=>'GET',
          'timeout'=>3.5
        )
      );
      $context = stream_context_create($opts);
      $json=@file_get_contents($url,false,$context);
      if($json === false) return $fill;
      $fill=json_decode($json,true);
    }
  catch (Exception $e)
    {
      return is_array($fill) ? array():$fill;
    }
  return is_array($fill) ? array():$fill;
}

function dirList ($directory) 
{
  $out= "\n<ul id='dirlist'>";
  // create a handler for the directory
  $handler = opendir($directory);
  $list=array();
  $iter_letters=array();
  // keep going until all files in directory have been read
  while ($file = readdir($handler)) {

    // if $file isn't this directory or its parent, 
    // add it to the results array
    if ($file != '.' && $file != '..' && $file != 'error_log' && $file != 'index.php' && $file != 'generate_sitemap.php' && $file!='fonts' && $file!='api.php') {
      if(!strpos($file,"css") && !strpos($file,"inc") && !strpos($file,"xml")  && !strpos($file,"bak"))
        {
          $file_name=str_replace("_"," ",$file);
          $file_name=str_replace(".php","",$file_name);
          $list[$file_name]="\n\t<li><a href='$file'>$file_name</a></li>";
          $i++;
        }
	  }
  }
  // Multimerge above will append a number to the end of the recipe name in case of duplicate versions.
  $list=array_multimerge($list,includeTarget('http://www.quantum-immortal.net/rspradley/recipes/api.php'));
  /*
   * Since the keys contain recipe names, 
   * and the values may contain full URLs, 
   * sort by the keys
   */
  ksort($list);
  foreach($list as $name=>$item)
    {
      $first_letter = substr($name,0,1);
      if(!in_array($first_letter,$iter_letters))
        {
          $iter_letters[]=$first_letter;
          $out.="\n\t<li class='letter_header'>$first_letter</li>";
        }

      $out.= $item;
    }
  // tidy up: close the handler
  closedir($handler);

  // done!
  $out.="</ul>";
  echo "<h4>" . sizeof($list) . " recipes found</h4>$out";

}
dirList('./');
?>

<?php include('footer.inc'); ?>
