<?php

class Grades
{
      
    private $count ;
    private $i ;
    
    public function getGrades($string1)
	{		
           // function  to find Grades of students
          
         
        $count1 = count($string1);
        
       // echo $count1 ;
        
        foreach($string1 as $row)
        {
            if($row >0 && $row < 38)
            {
                $t=$row;
                
                $row1[] = $t ;
                
            }elseif ($row >=38 && $row <= 100)
            {
                
                $count11 = round(($row+5/2)/5)*5;
                
                 if($count11-$row<3)
                 {
                $t =  round(($row+5/2)/5)*5;
                 }
                else
                {
                    $t = $row;
                }
                
                $row1[] = $t ;
                
            }
            
            
            
        }
        
        return $row1 ; 
        
}
 
    
}
    
    
    
?>