<html>
    <head>
        <title>Results</title>
    </head>
    <body>
    
        <p>The Answer is: </p>
        <?php

        
            $number1 = $_GET["num1"];
           
            $number2 = $_GET["num2"];
            
            $Operators = $_GET["Operator"];

            switch($Operators){

                case "None":
                     echo "You need to select the operator";
                break;
                case "Add":
                    echo $number1+$number2;
                break;
                case "Substract":
                    echo $number1-$number2;
                break;
                case "Multiply":
                    echo $number1*$number2;
                break;
                case "Divide":
                    echo $number1/$number2;
                break;

            }
        

        ?>
    </body>

</html>
