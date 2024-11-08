<!DOCTYPE html> 
<head>
    <link rel="stylesheet" href="st.css">
</head>

<?php

require '../php/vendor/autoload.php';

use  Dotenv\Dotenv; 

#loading dotenv
$dotenvfile = dirname('__FILE__',1);
$dotenv = Dotenv::createImmutable($dotenvfile);
$dotenv->load();

##importar css



#echo 'LET ME HERE<br>';
$printers =explode(';',$_ENV['printers']);

$sgv  ='<svg  width="400" height="200" >
        <rect stroke-width="3" x="10" y="50" width="300" height="150" fill="none" stroke="blue" />       
        </sgv>' ;

   


       # echo $sgv;
foreach ($printers as $print ) {

    list($ip,$nome) = explode(':',$print);
   echo '<div class="impressora">ip: '.$ip.' ------  nome: '.$nome.   '</div>';
    #echo $print;


}



?>

<?

#obs
#kali linux
#Before start
#open terminal
#make sure ufw "apache full" is allowed. case not
#write `sudo ufw allow apache`
#systemctl apache2 start = service apache2 start
?>