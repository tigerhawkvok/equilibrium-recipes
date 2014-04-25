<?php
/*
 * Return a listing of all the files and absolute paths
 */

function returnAjax($data) 
{
  if(!is_array($data)) $data=array($data);
  header('Cache-Control: no-cache, must-revalidate');
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Content-type: application/json');
  print json_encode($data);//,JSON_FORCE_OBJECT);
  exit();
}

function dirListPHP ($directory,$filter=null) 
{
  $results = array();
  $handler = @opendir($directory);
  if($handler===false) return false;
  while ($file = readdir($handler)) 
    {
      if ($file != '.' && $file != '..' )  
        {
          if($filter!=null)
            {
              if(strpos(strtolower($file),strtolower($filter))!==false) $results[]=$file;
            }
          else $results[] = $file;
        }
    }
  closedir($handler);
  return $results;
}

$list = dirListPHP("./","php");
asort($list);
$ret = array();
foreach($list as $recipe)
  {
    $search_arr =array(".php","_");
    $replace_arr = array(""," ");
    $name = str_replace($search_arr,$replace_arr,$recipe);
    if($name != "api") $ret[$name] = "http://".$_SERVER['SERVER_NAME']."/".$recipe;
  }

returnAjax($ret);

?>