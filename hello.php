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
	{       //$message1="Please select one of the following options using a number or the subject name\n"; 
		$message2=" Maths.pdf\n";
		$message3="maths2.pdf\n";
		$message4="maths3.pdf\n";
	    $message5="maths4.pdf";	
         $message="$message1$message2$message3$message4$message5";	
	}




?>
<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $message?> 


</Message>
</Response>


