<?php
$number=$_POST['9293298005'];
$body=$_POST['Body'];

    header("content-type: text/xml");

if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number or the subject name\n"; 
		$message2="1. Maths\n";
		$message3="2. Science\n";
		$message4="3. Social Studies\n";
	    $message5="4. English\n";
	  
         $message="$message1$message2$message3$message4$message5";	
	}

if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Maths'||$_REQUEST['Body']=='maths')
	{        
		$message1="Please select one of the following options:\n";
		$message2=" Text M6 for 6th grade notes\n";
		$message3="Text M7 for 7th grade notes\n";
		$message4=" Text M8 for 8th grade notes";
	    
         $message="$message1$message2$message3$message4";	
	}

if($_REQUEST['Body']=='M6')
	{        
	$message1="6th grade--- http://mrsmmartinsclassroom.weebly.com/uploads/1/8/5/7/18571084/6th_grade_workbook.pdf\n\n";
	//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
	//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='M7')
	{        
//$message1=" 1. 6th grade--- http://mrsmmartinsclassroom.weebly.com/uploads/1/8/5/7/18571084/6th_grade_workbook.pdf\n\n";
	$message2="7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
	//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message2";	
	}

if($_REQUEST['Body']=='M8')
	{        
//$message1=" 1. 6th grade--- http://mrsmmartinsclassroom.weebly.com/uploads/1/8/5/7/18571084/6th_grade_workbook.pdf\n\n";
//$message2="7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
$message3="8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	 $message="$message3";	
	}

if($_REQUEST['Body']=='2'||$_REQUEST['Body']=='Science'||$_REQUEST['Body']=='science')
	{        
		$message1=" Please select one of the following options:\n";
		$message2=" Text S6 for 6th grade notes\n";
		$message3=" Text S7 for 7th grade notes\n";
		$message4=" Text S8 for 8th grade notes";
	    
         $message="$message1$message2$message3$message4";	
	}

if($_REQUEST['Body']=='s6'||$_REQUEST['Body']=='S6')
	{        
$message1="6th grade--- http://www.glencoe.com/sites/florida/student/science/assets/pdfs/g6scintbk2.pdf\n\n";
	//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
	//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='s7'||$_REQUEST['Body']=='S7')
	{        
	$message1="7th grade--- http://tccl.rit.albany.edu/knilt/images/8/85/Saylor_INB_12_13.pdf\n\n";
	//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
	//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='s8'||$_REQUEST['Body']=='S8')
	{        
$message1="8th grade--- http://www.glencoe.com/sites/common_assets/science/workbooks/georgia/ga8sn2.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='3'||$_REQUEST['Body']=='Social Studies'||$_REQUEST['Body']=='social studies')
	{        
		$message1=" Please select one of the following options:\n";
		$message2=" Text SS6 for 6th grade notes\n";
		$message3=" Text SS7 for 7th grade notes\n";
		$message4=" Text SS8 for 8th grade notes";
	    
         $message="$message1$message2$message3$message4";	
	}

if($_REQUEST['Body']=='SS6'||$_REQUEST['Body']=='ss6')
	{        
$message1="http://www.p12.nysed.gov/ciai/socst/pub/sscore1.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}
if($_REQUEST['Body']=='SS7'||$_REQUEST['Body']=='ss7')
	{        
$message1="http://achieve.lausd.net/cms/lib08/CA01000043/Centricity/Domain/226/7th_Grade%20Instructional%20Guide.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='SS8'||$_REQUEST['Body']=='ss8')
	{        
$message1="8th grade--- http://www.textbooksonline.tn.nic.in/books/11/std11-hist-em.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}


if($_REQUEST['Body']=='4'||$_REQUEST['Body']=='English'||$_REQUEST['Body']=='english')
	{        
		$message1=" Please select one of the following options:\n";
		$message2=" Text E6 for 6th grade notes\n";
		$message3=" Text E7 for 7th grade notes\n";
		$message4=" Text E8 for 8th grade notes";
	    
         $message="$message1$message2$message3$message4";	
	}

if($_REQUEST['Body']=='e6'||$_REQUEST['Body']=='E6')
	{        
$message1="6th grade--- https://www.mhschool.com/reading/treasure_workbooks/national/g6/grammar_pb.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='e7'||$_REQUEST['Body']=='E7')
	{        
$message1="7th grade--- http://www.doe.mass.edu/mcas/2012/release/g7ela.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

if($_REQUEST['Body']=='e8'||$_REQUEST['Body']=='E8')
	{        
$message1="8th grade--- http://sestextbooks.com/pdfs/8th%20grade%20TEACHERS%20EDITION%20ELA.pdf\n\n";
//$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
//$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	  $message="$message1";	
	}

?>

<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $message?> 
<?php echo"\nSend start to start again";?>	    

</Message>
</Response>


