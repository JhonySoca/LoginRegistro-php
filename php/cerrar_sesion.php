<?php

session_start();

session_destroy();

header("location: ../assets/index.php");