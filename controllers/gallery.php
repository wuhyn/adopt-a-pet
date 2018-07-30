<?php

$images = $database->selectAll('gallery_image');

require 'views/gallery.view.php';
