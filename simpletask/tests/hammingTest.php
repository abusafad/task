<?php
//inclute hamming classes 
include_once("./classes/Hamming.php");

class HammingTest 
{
    public function testHammingDistance()
    {
        $hamming = new Hamming();  //create object to access the function from Hamming classes .
        $result2 = $hamming->getHammingDistance('aaaa','aaee'); //The result of the calculation if we enter two strings 
        
        echo 'The first case : ';
         if($result2 != 0)
         {
             echo 'Test Pass' ;
         }
        else
        {
            echo 'Test filed';
        }
        
        
        
        echo '<br>';
        
        $result3 = $hamming->getHammingDistance('aaa','aa'); //The result of the calculation if we enter two strings 
        echo 'The second case : ';
        echo $result3 ;
        
        
        
    }

}

?>