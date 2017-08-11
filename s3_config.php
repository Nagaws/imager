<?php
// Bucket Name
$bucket="pratap14321";
if (!class_exists('S3'))require_once('S3.php');
			
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJXZ37FCIFGB2J6IQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');
			
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>