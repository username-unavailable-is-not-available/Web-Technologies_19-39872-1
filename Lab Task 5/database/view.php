<?php

include '../partials/header.php';

require_once 'connect.php';

$result = $connection->query("select * from sample_2");

require_once 'delete.php';

$id = 0;
require_once 'update.php';

include '../partials/footer.php';
