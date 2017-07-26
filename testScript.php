<?php
/**
 * Created by IntelliJ IDEA.
 * User: vinit
 * Date: 25/7/17
 * Time: 7:41 PM
 */

require '/home/vinit/personal-stuff/mdf1/vendor/autoload.php';
use Aws\S3\S3Client;
try {
    $s3 = S3Client::factory(array(
        'version' => 'latest',
        'region' => 'ap-south-1'
    ));

    $bucket = 'mdf-images';

//    $response = $s3->doesObjectExist($bucket, 'test.png');
//
//    var_dump($response);

//    $objects = $s3->getIterator('ListObjects', array(
//        "Bucket" => $bucket,
//        "Prefix" => "image/",
//        "Delimiter" => "/"
//    ), array(
//        'return_prefixes' => true,
//    ));
//
//    foreach ($objects as $object) {
//        if (isset($object['Prefix'])) {
//            // For Common Prefixes
//            echo $object['Prefix'] . "<br/>\n";
//        } else {
//            // For Objects
//            echo $object['Key'] . "<br/>\n";
//        }
//    }

//    $result = $s3->listObjectsV2([
//                'Bucket' => $bucket, // REQUIRED
//                'Delimiter' => '/',
//                'Prefix' => 'image/catalog/'
//               ]);
////    echo "Keys retrieved!\n";
//    foreach ($result['Contents'] as $object) {
//        echo $object['Key'] . "\n";
//    }


    $result= $s3->listObjects(array("Bucket" => $bucket,"Prefix" => "image/","Delimiter" => "/"));
    $files = $result->getPath('Contents');

    echo json_encode($result['CommonPrefixes']);die();

//    foreach ($result['CommonPrefixes'] as $object)
//    {
//        echo $object['Prefix'];
//    }

    echo json_encode($files);


}
catch (\Exception $e){
    print_r($e);
}
