<?php
$greeting = "Hello!";
function showGreeting() {
 global $greeting;
 echo $greeting;
}
showGreeting();
?>