<?php
if ($item['class']==0) {
  echo "<li>";
  echo "<span>".$item['disp']."</span>"
  echo </li>
} else {
  echo "<li>";
  echo "<a href=".$item['link'].">".$item['disp']."</a>"
  echo </li>
}
?>
