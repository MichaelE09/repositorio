<html>
<head>
<title>calculadora</title>
</head>

<body>
<form action="calculora.php"method="get">

<input name = "num1" type="text"/>
<br/> <br />

<input name="name2" type="text"/>
<br /> <br/>


<input name="oporecao" type="text" />
<br/> <br/>

<input type ="submit" value="submeter" />
<br/> <br/>

</form>  
<?php 

 $a = $_GET "num1";
        $b = $_GET "num2";
        $op =$_GET "operacao";
        $c = []
        if($op == "soma")
            $c = $a + $b;
            //echo $c = "resultado";
        else if($op == "subtracao")
            $c = $a - $b;
            

?>


</body>
</html>
