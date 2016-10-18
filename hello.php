<?php
$number=$_POST['9293298005'];
$body=$_POST['Body'];

    header("content-type: text/xml");

?>
<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $body?> 


</Message>
</Response>


