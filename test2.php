<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$bucket = 'vcch-temp';

// S3
$s3 = new Aws\S3\S3Client([
    'profile' => 'vcch2',   
    'region'  => 'us-east-1',
    'version' => 'latest'
]);

$result = $s3->listBuckets(array());
foreach ($result['Buckets'] as $bucket) {
    echo $bucket['Name'], PHP_EOL;
}
echo 'done';
?>
