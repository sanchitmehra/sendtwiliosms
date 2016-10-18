<?php
$number=$_POST['9177465090'];
$body=$_POST['Body'];

    header("content-type: text/xml");
  //  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>
Hello<?php echo $number?>.
You said <?php echo $body?>
</Message>
</Response>
