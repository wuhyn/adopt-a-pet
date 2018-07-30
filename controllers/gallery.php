<?php

$tasks = $database->selectAll('todos');

require 'views/gallery.view.php';
