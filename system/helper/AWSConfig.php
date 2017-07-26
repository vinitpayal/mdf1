<?php
/**
 * Created by IntelliJ IDEA.
 * User: vinit
 * Date: 14/7/17
 * Time: 11:04 AM
 */
require BASE_DIR.'vendor/autoload.php';
use Aws\S3\S3Client;


function getS3Configs(){

    $s3ConfigArr = [];

    $s3ConfigArr['bucket-name'] = 'mdf-images';
    $s3ConfigArr['version'] = 'latest';
    $s3ConfigArr['region'] = 'ap-south-1';

    return $s3ConfigArr;
}

function getS3Client(){
    $s3Configs = getS3Configs();

    try {
        $client = S3Client::factory(array(
            'profile' => 'default',
            'version' => $s3Configs['version'],
            'region' => $s3Configs['region']
        ));

//        $s3 = new Aws\S3\S3Client([
//            'version' => $s3Configs['version'],
//            'region' => $s3Configs['region']
//        ]);

        return $client;
    }
    catch(\Exception $e) {
        error_log("unable to get s3 client with error :".$e->getMessage());
        return null;
    }
}

function checkRemoteFileExistence($filePath){
    return @getimagesize(BASE_S3_URL.$filePath);
}