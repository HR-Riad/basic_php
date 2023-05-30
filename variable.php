<html>  
    <body>
        
    
        <?php  
        //variable name is sensitive
            $color = "black";  
            echo "My car is ". $ColoR ."</br>";  
            echo "My dog is ". $color ."</br>";  
            echo "My Phone is ". $COLOR ."</br>";  
       
       //PHP echo: printing escaping characters
       echo "Hello escape \"sequence\" characters";  
       
       //PHP echo: printing variable value
       $msg="Hello  PHP"; 
       echo " <br> Message is: $msg";
       

       //variable related 
       $name = "HR Riad";
       $sports = "football";
       $trophies ="43";
      

        echo  " <h1> Hello {$name}  </h1>";

        echo "<br> You like {$sports} <br>";
        echo " <h4> Messi have {$trophies} Trophies </h4>" ; 

        $gpa = 3.42;
        echo "</br> You Gpa is : {$gpa} </br>" ;  
        $price = 121722;
        echo  "Your Jersey price is \${$price}";
        $tax_rate = 3.28;
        echo " </br> Your tax rate is {$tax_rate}%";


        $online = true;
        $offline = false;
        $for_sale = true;;


        echo "</br>  Your friend is {$online}";
        echo "</br>  Your girlfriend is {$offline}";
        

        $food = "Burger";
        $burger_price = 9.9;
        $quantity = 3;
        $total = null;


        echo "</br>  <h3> You have ordered {$quantity} x {$food}s </h3>";
        $total =  $quantity * $burger_price ;
        echo " <h3> Total price is : \$ {$total} </h3>";


        


       ?>  
    </body>  
</html> 