<?php
$number=$_POST['9293298005'];
$Body=$_POST['Body'];

    header("content-type: text/xml");
if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number or the subject name\n"; 
		$mesaage2="1. Maths\n";
		$message3="2. Sceince\n";
		$message4="3. History\n";
	    $message5="4. English\n";	
         $message="$mesaage1.$message2.$message3.$message4.$message5";	
	}

if ($_REQUEST['Body'] == '1' || $_REQUEST['Body'] == 'maths')
{
	$message1= "1. 6th grade--- https://www.math.ksu.edu/~dbski/writings/further.pdf\n\n\n";
	
	$message2="2. 7th grade--- http://mrsmmartinsclassroom.weebly.com/uploads/1/8/5/7/18571084/6th_grade_workbook.pdf --for 7th grade\n";
	
	$message3="Send science to receive science notes, history to receive history notes, english to receive english notes";
	$message= $message1.$message2.$message3;
}

	else if($_REQUEST['Body'] == 'Science' || $_REQUEST['Body'] == 'science')
	{
		$message="science.pdf";
		
	}
	else if($_REQUEST['Body'] == 'History' || $_REQUEST['Body'] == 'history')
	{
		$message="History.pdf";
	}

 
?>
<Response>
    <Message>
Hello  <?php echo $number."\n"?>
<?php echo $message?> 


</Message>
</Response>


