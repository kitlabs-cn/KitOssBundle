<?php
namespace Kit\Bundle\OssBundle\Service;

use OSS\OssClient;

class ImageService extends ClientService
{
    public function upload($bucket, $object, $file)
    {
        try {
            $this->getClient()->uploadFile($bucket, $object, $file);
        }catch (\Exception $e){
            
        }
    }
}