<?php

session_start();

$_SESSION['username'] = "test1";

echo '<a href="test2.php">test2</a>';