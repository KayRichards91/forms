<label>Would you like to claim your prize?</label>
<br/>
<br/>

<form action="index.php" method="post">
<input type="radio" name="answer" value="Yes" id="yes" />Yes
<input type="radio" name="answer" value="No" id="no" />No
<input type="submit" name="submit" value="Submit" />
<br/>
</form>

<?php
if (isset($_POST['submit'])) {
if(isset($_POST['Yes']))
{
echo "Congrats! You have selected :".$_POST['Yes'];  
//  Displaying Selected Value
}
}
?>