<html>
<head>
</head>
<a style="float:right" href="index.php">previous</a>
<body style="background-color:yellow">
    <div style="margin-left:30%">
<!-- if calculate is pressed perform these actions -->

					<?php  
					     
						 SESSION_START();
						// begin if statement
					
					if(isset($_POST['calculate']))
					{
							
						  $q = $_POST['no_of_rows'];
						  
						  //finding summation of x
						  
						 
						  $sum_of_x =0;
						  $sum_of_f =0;
						  $sum_of_fx =0;
						  $sum_of_fxsquare=0;
						  $hfdata=$_POST['f1'];//initially hfdata
						  $hf=$hfdata;//initially hf
						  $iteration=1;
						  
						  for($j=1;$j<=$q;$j++)
						  {  

											   //begin for loop
											   
											   $x="x".$j;
											   $f="f".$j;
											   $xdata=$_POST[$x];
											   $xsquaredata=$xdata*$xdata;
											   $fdata=$_POST[$f];
											   //finding higest frequency
											   if($hf<$fdata)
											   {
												 $hf=$fdata; 
												 $iteration=$j;						 
												   
											   }
											   
											   
											   
											   //echo " </br> $y = $xdata";
											   $sum_of_x = $sum_of_x+$xdata;
											   $sum_of_f = $sum_of_f+$fdata;
											   $sum_of_fx=$sum_of_fx+($xdata*$fdata);
											   $sum_of_fxsquare=$sum_of_fxsquare+($fdata*$xsquaredata);
											   
											  // $mean_of_data=
							
						  } //end of for loop 
						 
						 ?>
						 
						 <p><?php echo "</br> summation of x = $sum_of_x" ; ?></p>  <!-- printing summation x -->
						 <p><?php echo "</br> summation of y = $sum_of_f" ; ?></p>  <!-- printing summation y-->
						 <p><?php echo "</br> summation of fx = $sum_of_fx" ; ?></p>  <!-- printing summation fx-->
						 <p><?php echo "</br> summation of f*xsquare = $sum_of_fxsquare";?></p><!-- printing summation fxsquare-->

						 <?php   
						  // calculating mean and mode
						  $mean=0;
						  if($sum_of_f !=0)
						  {
						  $mean=$sum_of_fx/$sum_of_f;
					      }
						  else{
							  echo "sum of f is zero hence cant find standard deviation";
						  }
						  $hfindex="x".$iteration;
						  $mode=$_POST[$hfindex];
					
						   echo"</br></br> mean = $mean";
						   echo"</br></br> mode= $mode";
						 
						  echo "</br></br>standard deviation is : ";
						  	  $standard_deviation=0;
						  if($sum_of_f !=0)
						  {
						  $standard_deviation=sqrt(  ($sum_of_fxsquare/$sum_of_f)-($mean*$mean)    );
						  echo $standard_deviation;
						  }
						  else{echo "sum of f is zero hence cant find standard deviation";}
							  
						  echo " </br></br> karl pearsons coefficient of co-realation is : ";
					
						  if( $standard_deviation!=0)
							 {
							 $kpccr=($mean-$mode)/$standard_deviation;
							 echo $kpccr;
							 }
						 
						 else{ echo "standard_deviation is 0 hence cant find karl pearsons coefficient of co-realation";}
						 
						 
					 
					 
					 
					 } //  closing if statement;
					 
					  ?>
					  </div>
					  
</body>
</html>