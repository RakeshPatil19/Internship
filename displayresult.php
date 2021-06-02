<html>
 <head>
  <title>Display Result</title>
  <link rel="stylesheet" href="style.css">
 </head>    
 <body>
     <h1>Result</h1>  
     <table align="center">
         <tr>
               <th >Name</th>
               <th colspan="2"><?php $n=$_POST['name']; echo "$n";?></th>
         </tr>
         <?php
         $name = $_POST['name'];
         $sub1 = $_POST['sub1'];
         $sub2 = $_POST['sub2'];
         $sub3 = $_POST['sub3'];
         $sub4 = $_POST['sub4'];
         $sub5 = $_POST['sub5'];
         $total=$sub1+$sub2+$sub3+$sub4+$sub5;
         $per=$total/5;
         if($per>=90){
             $str="Distiction";
         }
         elseif ($per>=80 && $per<90) {
         $str="First Class";
         }
         elseif ($per>=70 && $per<80) {
         $str="Second Class";
        }
        elseif ($per>=50 && $per<70) {
            $str="Pass Class";     
        }
        else {
            $str="Fail";
        }
        echo "<tr>
             <th>Subject Code</th>
             <th>Subject Name</th>
             <th>Subject Marks</th>
         </tr>";
        echo "<tr>
             <td>1</td>
             <td>MATHS</td>
             <td>$sub1</td>
             
         </tr>";
         echo "<tr>
             <td>2</td>
             <td>Science</td>
             <td>$sub2</td>
             
         </tr>";
         echo "<tr>
             <td>3</td>
             <td>Social Science</td>
             <td>$sub3</td>
             
         </tr>";
         echo "<tr>
             <td>4</td>
             <td>English</td>
             <td>$sub4</td>
             
         </tr>";
         echo "<tr>
             <td>5</td>
             <td>Gujarati</td>
             <td>$sub5</td>
             
         </tr>";
        ?>
         <tr> 
               <th colspan="3" ><?php echo "GRAND TOTAL : $total";?></th>
         </tr>
         <tr>
               
               <th ><?php echo "PERCENTAGE: $per % ";?></th>
               <th colspan="2" ><?php echo " ClASS: $str";?></th>
         </tr>
         <tr> 
               <th colspan="3" ><?php if($per>=50){  
                                        echo '<span style="color:green" >Cogratulation ! You have passed this exam</span>';  }
                                        else { echo '<span style="color:red" >Sorry! You have not cleared this exam</span>';}
             ?></th>
         </tr>
     </table>
             
 </body>
</html>
     