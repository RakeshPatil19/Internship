<?php?>
<html>
 <head>
  <title>Add Marks</title>
  <link rel="stylesheet" href="resultstyle.css">
 </head>    
 <body>
     
     <form method="post" action="displayresult.php" align="center">
  
         <p> Result Data </p>
         <input type="text"  placeholder="Student Name"  name="name"min="0" max="100" required id="input" ><br/><br/>
         <input type="number"  placeholder="Maths" name="sub1" min="0" max="100" required id="input" inputmode="numeric"><br/><br/>
        <input type="number" placeholder="Science"  name="sub2" min="0" max="100" required id="input" inputmode="numeric"><br/><br/>
        <input type="number"  placeholder="Social Science" name="sub3" min="0" max="100" required id="input" inputmode="numeric"><br/><br/>
        <input type="number" placeholder="English"  name="sub4" min="0" max="100" required id="input" inputmode="numeric"><br/><br/>
        <input type="number" placeholder="Gujarati"  name="sub5" min="0" max="100" required id="input" inputmode="numeric"><br/><br/>
     
	<input type="submit" id="button"  value="Add Marks"><br/><br/><br/>   	
   </form>
 </body>
</html>
         
