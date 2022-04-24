<?php
   $str='PHP Tutorial';
   $str = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>', $str);
   echo $str;
?>