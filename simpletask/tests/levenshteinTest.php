<?php
// To access the Levenshtein.php file 
include_once("./classes/Levenshtein.php");

class LevenshteinTest 
{
    public function testLevenshteinDistance() // function Responsible for the calculation process Levenshtein Distance
    {
        $levenshtein = new Levenshtein(); //create object to access the function from Levenshtein classes .
        
        $result2 = $levenshtein->getLevenshteinDistance('aa','a'); //The result of the calculation if we enter two strings
        
       echo 'The first case : ';
       echo   $result2;
        
        $result3 = $levenshtein->getLevenshteinDistance('aa','aa');
        
        echo '<br>';
        echo 'The second case : ';
        echo $result3 ;
        
    }

}

?>