<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
   <fieldset>
      <center>
            <form action="" method="post" >
               <h2> CALCULADORA </h2>
               Digite um número: <input name="num1" type="text"><br><br>
               Digite um número: <input name="num2" type="text"><br><br>
               <input type="submit" name="operacao" value="+">     
               <input type="submit" name="operacao" value="-">     
               <input type="submit" name="operacao" value="*">     
               <input type="submit" name="operacao" value="÷">     
               
            </form> 
         <?php

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao= $_POST['operacao'];

            if( !empty($operacao) ) {
               if($operacao == '+')
                  $result = $num1 + $num2;
               else if($operacao == '-')
                  $result = $num1 - $num2;
               else if($operacao == '*')
                  $result = $num1*$num2;
               else if($operacao == "÷")
                  $result = $num1/$num2;
               
               echo "O resultado da operação: $result";
            }
         ?>   
      </center> 
   </fieldset>   
</body>
</html>