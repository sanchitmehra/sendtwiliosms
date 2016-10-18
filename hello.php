<?php
$number=$_POST['9293298005'];
$body=$_POST['Body'];

    header("content-type: text/xml");

if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number or the subject name\n"; 
		$message2="1. Maths\n";
		$message3="2. Science\n";
		$message4="3. History\n";
	    $message5="4. English\n";	
         $message="$message1$message2$message3$message4$message5";	
	}


if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Maths'||$_REQUEST['Body']=='maths')
	{        
		$message1=" 1. 6th grade--- http://mrsmmartinsclassroom.weebly.com/uploads/1/8/5/7/18571084/6th_grade_workbook.pdf\n\n";
		$message2="2. 7th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n";
		$message3=" 8th grade--- http://www.glencoe.com/sites/common_assets/workbooks/math/pdf_workbook/m3ps.pdf\n";
	    
         $message="$message1$message2$message3";	
	}




?>
<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $message?> 


</Message>
</Response>


