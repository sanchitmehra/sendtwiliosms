<?php
$number=$_POST['9293298005'];
$Body=$_POST['Body'];

    header("content-type: text/xml");
if ($_REQUEST['Body'] == 'Maths' || $_REQUEST['Body'] == 'maths')
{
	$message= "https://www.math.ksu.edu/~dbski/writings/further.pdf";
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
Hello<?php echo $number?>
<?php echo $message?>

</Message>
</Response>
