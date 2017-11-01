<? SESSION_START(); ?>
<html>
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calstat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo_justified.css" rel="stylesheet">
	
<title>
CalStat
</title>


</head>
				

<body style="background-color:#ff9800">


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)    added -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed    ;;;;added-->
				<script src="js/bootstrap.min.js"></script>
  
  
  <div class="container" >
  
        <div style="margin-left:300px">
		
		<form class="form-group" action="index.php" method="post">
		
		     <table>
                    <tr>
						
                         <td>
						 
						 <strong> Find Karl pearsons Co-efficient of skewness </strong>
						 
						 </br>
						 
						  choose number of rows
                          
						  </br>
												 <select name="no_of_rows">
												                          
																		  
																		  
																		  
														 <?php for($o=1;$o<=5000;$o++){ 
															
															echo"<option value='$o'>$o</option>";
														
														}?>
																		<!--	<option value='2'>2</option>
																				<option value='3'>3</option>
																				<option value='4'>4</option>
																				<option value='5'>5</option>
																				<option value='6'>6</option>
																				<option value='7'>7</option>
																				<option value='8'>8</option>
																				<option value='9'>9</option>
																				<option value='11'>11</option>
																				<option value='12'>12</option>
																				<option value='13'>13</option>
																				<option value='14'>14</option> -->
												</select>
														
						 
				         </td>
						 
						 
                    </tr>
          
             
            
             </table>
			 
			
			<input type="submit" name="create_rows" value="create rows"> 
	  </form>
        
	<!--	</div>   -->

		<p></p>
<?php
if(isset($_POST['create_rows']))
{     
 $p = $_POST['no_of_rows'];
 
// echo $p;
 // $_SESSION['rows']=$p;
  echo "</br>";
//echo  $_SESSION['rows'] ;
?>
<form  action="calculate.php" method="post">

      <!--for loop -->
			    <?php	
				for ($i=1;$i<=$p;$i++)
				{   
			     $indexname="x".$i;
				 $indefname="f".$i;
				 //echo $indexname;
			    //for loop starts
				?>
		
Enter value for x<?php echo $i?> <input style="margin:15px" type="number" name="<?php echo $indexname  ?>" value=0 required/> 
Enter value for y<?php echo $i?> <input style="margin:15px" type="number" name="<?php echo $indefname  ?>" value=0 required/></br>
            
			<?php   } //for loop ends  ?>
	
	     </br>
	    <input align="center" style="margin-left:50%" type="hidden" name="no_of_rows" value="<?php echo $p;?>" /> <!--hidden element -->
		<input type="submit" name="calculate" />
		
</form>
			</div>
			
			   </div>
			
<?php } //if statement ends here  ?>





</body>


</html>




