<?php
$a = 'a';
$b = 'b';
$check = where(['user_id', '=','1'])->count();
print_r($check);