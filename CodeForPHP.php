<div>Code For PHP</div>
<?php
if ($item['class']==0) {
  echo "<li><span>".$item['disp']."</span></li>";
} else {
  echo "<li><a href=".$item['link'].">".$item['disp']."</a></li>";
}
?>
