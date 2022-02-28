<?php
include "browse.php";

?>
<div>
    <ul class="blocks">
       <?php
       include "booksMaster.php";
for($i=0;$i<count($names);++$i){
    $_SESSION['name']=$names[$i];
    include "block.php";

}

       ?>

    </ul>
    
   
</div>
<?php
include "footer.php";
?>