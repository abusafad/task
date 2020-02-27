
<?php
//test from mahmood
//--------------**  about this page   **-----------------------

    //This page is responsible for displaying the program by communicating with other files, which are opened when the program is executed

//--------------**   **-----------------------

//To access the Grades file

include_once("classes/Grades.php");

$grades = new Grades(); //create object to access the function from Grades classes .

//Give initial values before starting operations
  $string1 = ""; 

if(isset($_POST['submit'])) {  //Check if the button is pressed and that the information came through post .
    
  $string1 = $_POST['numbers'];
    

 $result2 = $grades->getGrades($string1); //Access the function within the Grades classes and give them the values that came from the form   
    
    
?>

<html>
<head>	
	<title>Homepage</title>
    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>  
</head>

<body>
     
   <table>
  <tr>
    <th>id</th>
    <th>original grade </th>
    <th>final Grade </th>
  </tr> 
    
    <?php
    
    $i=0;
    $c=1;
    foreach ($result2 as $row4)
        
    {?>
        
    
  <tr>
    <td><?php echo $c ; ?> </td>
      
    <td><?php echo $string1[$i] ; ?></td>
      
      
      <td><?php echo $row4 ; ?></td>
  </tr>
  
    <?php
     $i=$i+1;
     $c=$c+1;
    }
       
}
    ?> 
    <!-- this form responsible for displaying two input and send information to php code  . -->
    </table>
    
    
     <form action="" method="post">
    <label>  please enter number of students  </label>
       <input type="number" min="1" max="60" step="1" name="numberOfStudents" required/>    
        <input type="submit" value="sent" name="submit2"/>
    </form>
    
    
        
    <?php
    if(isset($_POST['submit2'])) {
        
        $countStudents = $_POST['numberOfStudents'] ; 
        
        echo "<form action='' method='post'>" ;
        
        for($i=0; $i<$countStudents ; $i++){ 
            
          echo "  <input type='number' min='0' max='100' step='1' name='numbers[]' required/> ";
            
        }  
       echo " <input type='submit' value='send' name='submit' />";
	   echo " </form>";       
    }
    ?>
     
   </body>
</html> 
