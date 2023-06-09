<?php

use PHPageBuilder\Repositories\UploadRepository;

$filesRepository = new UploadRepository;
$files = $filesRepository->getAll();

//print_r($files);
echo 'success!!!!!!!!';

//return 'continue';

