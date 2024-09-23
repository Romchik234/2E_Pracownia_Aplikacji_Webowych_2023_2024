<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrypt php</title>
</head>
<body>
     <p>
        <?php  
        echo ("Php skrypt hi bonjur <br>"); 
        
        $liczba = 5 ; 
        $nazwa = "Patrik";
        $ilosc = 123;  
        
        echo "Liczba = $liczba  <br> ";
        echo "NAzwa = $nazwa  <br>" ;
        echo "Ilosc = $ilosc  <br>"; 
         
        $imie = "Anna";
        $jezyk = 'PHP'; 

        $tekstDuzo = <<<TX
        FDFjjKDJFKDF
        mam na imie $imie <br>/
        cos tam cos tam jezyk $jezyk
        SFKDFDFDF
        OODFOFOFDFjffd
        TX;

        echo $tekstDuzo ; 


        $tekstDuzoTex = <<< 'PC'
        opa opa opa $imie <br>
        PC;
        echo $tekstDuzoTex ; 

        $dane = array (
                array(
                    "Nazwisko" => "KOwalski", 
                    "Imie" => "Jan", 
                    "Wiek" => 27), 
                array(
                    "Nazwisko" => "DOpa", 
                    "Imie" => "Alfa", 
                    "Wiek" => 254),
                array(
                    "Nazwisko" => "Ninja", 
                    "Imie" => "Patric", 
                    "Wiek" => 24)
        );
        
        $x = 23.5 ; 
        $y = (integer) $x ; 
        echo $x . "<br>";
        echo $y . "<br>"; 
        
        settype ($x , 'float'); 
        echo $x . "<br>";  

        echo "x jako Float : $x <br>"; 
        settype($x,"integer"); 
        echo"x jako integer(int )  : $x <br>"; 
        settype($x,"string");
        echo"x jako String  : $x <br>"; 
         

        ?>
    </p>

        <p>
            <?php
                echo "Zadanie 1 <br>"; 
                $zmiennaInt = 1 ; 
                $zmiennaFloat = 2.01;
                $zmiennaString = "Shark";

                echo "$zmiennaInt <br> $zmiennaFloat <br> $zmiennaString";

                echo "Zadanie 2 <br>"; 
                
                $Text1 = "Opa"; 
                $Text2= 'Opa';
                $Text3= <<<TX
                Opa
                TX;
                $Text4= <<<'OpaTx'
                Opa
                OpaTx;

                echo "$Text1 <br> $Text2 <br>  $Text3 <br> $Text4";

            ?>
        </p>

</body>
</html>