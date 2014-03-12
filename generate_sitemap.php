<?php
$title='Generate Sitemap';
include('header.inc');

$today = date('Y-m-d');
$sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
  <urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
$sitemap .= "    <url>
      <loc>http://revealedsingularity.net/recipes/</loc>
      <lastmod>$today</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.2</priority>
    </url> \n";

    // create a handler for the directory
$handler = opendir('./');
$list=array();
    // keep going until all files in directory have been read
while ($file = readdir($handler)) {
  
  // if $file isn't this directory or its parent, 
  // add it to the results array
  if ($file != '.' && $file != '..' && $file != 'error_log' && $file != 'index.php' && $file != 'generate_sitemap.php' && $file != 'sitemap.xml') 
    {
      if(!strpos($file,"css") && !strpos($file,"inc") && !strpos($file,"xml")  && !strpos($file,"bak")) 
	{
	  $sitemap .= "    <url>
      <loc>http://revealedsingularity.net/recipes/$file</loc>
      <lastmod>$today</lastmod>
      <changefreq>monthly</changefreq>
      <priority>0.9</priority>
    </url>\n ";
	}
    }
}

closedir($handler);

$sitemap .= "  </urlset>";

$fh=fopen('sitemap.xml','w');
if(fwrite($fh,$sitemap))
  {
    echo "<p>Sitemap finished! Check it: <a href='sitemap.xml'>sitemap.xml</a></p>";
  }
else
  {
    echo "<p>Sitemap NOT made.</p>";
  }


include('footer.inc');
?>