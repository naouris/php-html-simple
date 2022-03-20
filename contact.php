 <?php
 /*$x=10;
  $y="GL2";
echo $x;
echo  $y;

$T=[2,3,6];
print_r($T);


$T=array();
$T[]=2;
$T[]=3;
$T[]=6;

for($i=0; $i < 3 ;$i++){
echo $i. '<br>';
}*/

/*$a=14;
$b=5;
function sum($a,$b){
return $a +$b;

}
var_dump($a,$b).die();*/
?>

<html>
<head>
<title> contact</title>
</head>

	<body>
<?php
	if (isset($_GET['nom'])&& isset($_GET['prenom'])){
	
	     if (!empty($_GET['nom'])&&!empty($_GET['prenom'])){
		 
		 $nom=$_GET['nom'];
		  $prenom=$_GET['prenom'];
	  
		  
		  echo 'Nom :'.$nom.'<br>';
	echo 'Prenom:'.$prenom;}}
?>	

<table border=1 width="100%">
<form>
  <tr>
  <td>nom</td>
  
  
  <td>prenom</td>
  				

    </tr>
<tr>
  <td><?php echo $nom ; ?></td>
  <td><?php echo $prenom ; ?></td>
    
        </tr>
</form>
</table>
				


<?php
 else {
echo 'champ Manquants';
}
?>
		   // $Nom=$_GET['mail'];
		   // $Nom=$_GET['date'];
		   // $Nom=$_GET['tele'];
		   // $Nom=$_GET['select'];
		   // $Nom=$_GET['text1'];
		   
	</body>
	</html>
		   











