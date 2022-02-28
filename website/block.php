<?php
include_once "booksMaster.php";
$name=strtolower($_SESSION['name']);



?>


<li>
<a href="bookReview.php?name=<?=$name?>"><img src=<?=$photo[strtoupper($name)]?> alt="poza"></a>
<h2><?=strtoupper($name)?></h2>
<p><?=substr($book[strtoupper($name)],0,150)."..."."<a href='bookReview.php?name=$name'>READ MORE--></a>";?></p>
<br>


</li>