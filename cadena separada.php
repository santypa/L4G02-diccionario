<?php 

$entrada =["baseball","cat,bas,hol,base,rar,pull,ball"];


$salida = explode(",",$entrada[1]);


for($i=0;$i<count($salida);$i++)
{
echo $salida[$i];
echo "<br>";

}

$com="";


for ($a=0;$a<count($salida);$a++){

    for ($b=0;$b<count($salida);$b++){

        if ($a!=$b){
           
            $com = $salida[$a].$salida[$b];
            

            if($com == $entrada[0]){

                echo "salida valor :".$salida[$a].",".$salida[$b];
            }

        }
        

    }
}
?>