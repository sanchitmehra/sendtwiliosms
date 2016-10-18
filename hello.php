<?php
$number=$_POST['9293298005'];
$Body=$_POST['Body'];

    header("content-type: text/xml");
if ($_REQUEST['Body'] == 'Maths' || $_REQUEST['Body'] == 'maths')
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

<Response>
	
<?php echo $number."\n"?>
<?php echo $message?> 
