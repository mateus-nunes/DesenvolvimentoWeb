<?php

//var_dump($_POST);

htmlspecialchars($_POST['user']);

# INSERT INTO users VALUES($_POST['user']);