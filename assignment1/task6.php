<?php

   $http='https://www.w3schools.com/php/default.asp';
   $http=parse_url($http);
   echo 'Scheme : '.$http['scheme']. '<br>'.'Host : '.$http['host'].'<br>'.'Path : '.$http['path'];

?>