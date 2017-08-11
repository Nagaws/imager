<?php
// Bucket Name
$bucket="s314321";
if (!class_exists('S3'))require_once('S3.php');
			
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'Your Key');
if (!defined('awsSecretKey')) define('awsSecretKey', 'your secret');
			
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>
