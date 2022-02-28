<?php
include "browse.php";
include "booksMaster.php";


$user="root";
$pass="";
$db="booksdb";
$table=strtolower($_GET['name']);
setcookie($table,true,time()+3600);

require('../rb-mysql.php');
R::setup("mysql:host=localhost;dbname=$db","$user","$pass");
$sql="SELECT * FROM $table ORDER BY rateing DESC";
$rows=R::findAll($table);

?>
 <link rel="stylesheet" href="bookReview.css">
<div class="container">
<div class="title">
<h1 style="display:inline-block"><?=strtoupper($table)?></h1>
<p style="display:inline-block">stars</p>
</div>
<hr>
<div class="desc">
<img src=<?=$photo[strtoupper($table)]?> style="width:256px;" alt="poza">
<h3><?=$book[strtoupper($table)];?></h3>

</div>
<br>
<div style="display:block;">
<img style="float:left;width:30px;margin:0px 10px;" src="256x256bb.png" alt="poza">
<h2 >  <?=$_SESSION['user']?>:</h2>
<form action="comment.php?name=<?=$table?>&" method="GET">
<textarea style="display:inline-block" name="comment" id="" cols="120" rows="4">Tell us your opinion...</textarea>
<input type="submit" value="Post">
<input type="hidden" name="name" value="<?=$table?>">
</form>
</div>
<hr>
<?php
for($i=1;$i<=count($rows);++$i){
    echo "<div class='bgclr'>";
        $txt="<img style='padding-top:16px;display:inline-block;float:left;width:30px;heigth:30px;margin:0px 10px;' src='256x256bb.png' alt='poza'>
     <h2 style='display:inline-block;padding-right:10px;'>". strtoupper($rows[$i]['username'])."</h2>"."<p style='display:inline-block'>"." on " .$rows[$i]['date']."</p>"."<h4 style='padding-bottom:10px;padding-left:10px;'>".ucfirst($rows[$i]['review'])."</h4>";
        echo $txt."</div>";
}
 

?>


</div>




