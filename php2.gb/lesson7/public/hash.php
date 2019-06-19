<?php

$hash = password_hash('admin',PASSWORD_DEFAULT);
var_dump($hash);
var_dump(password_verify('admin',$hash));