 
<?php 

require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

//Create a S3Client
$s3Client = S3Client::factory();
/*
//Listing all S3 Bucket
$buckets = $s3Client->listBuckets();
foreach ($buckets['Buckets'] as $bucket){
    echo $bucket['Name']."\n";
}

*/
$s3Client->createBucket(array('Bucket' => 'sao-test-mybucket'));

 ?>
