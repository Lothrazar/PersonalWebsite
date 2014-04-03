<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
	        <?php
 
$handle = fopen("views.txt", "r");
if(!$handle){
     
 echo "could not open the file" ;
 
}
else {
     
     
    $counter = (int ) fread($handle,20);
    fclose ($handle);
    $counter++;
    echo" <strong> you are visitor no ". $counter . " </strong> " ;
$handle = fopen("views.txt", "w" );
fwrite($handle,$counter) ;
fclose ($handle) ;
    }
?>
 	
		<h1>Hello World!  My name is Lothrazar, aka Sam Bassett.  My website is under construction </h1>
		
		
		<h2><?=  " For now, find me at the following places"?></h2>
		
		
		
		
		<a href="https://twitter.com/lothrazar">https://twitter.com/lothrazar</a>
		
		<br/>
		<a href="http://youtube.ca/lothrazar">http://youtube.ca/lothrazar</a>
		<br/>
		<a href="https://github.com/PrinceOfAmber">https://github.com/PrinceOfAmber</a>
		<br/>
		<a href="http://ca.linkedin.com/pub/samson-bassett/25/653/49">http://ca.linkedin.com/pub/samson-bassett/25/653/49</a>
		<br/>
	 
	</body>	
</html>