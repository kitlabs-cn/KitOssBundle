<?php
namespace Kit\Bundle\OssBundle\Service;

use OSS\OssClient;
use Symfony\Component\Config\Definition\Exception\Exception;

class OssClientService
{
    /**
     * get oss client 
     * @param unknown $accessKeyId
     * @param unknown $accessKeySecret
     * @param unknown $endpoint
     * @throws Exception
     * @return \OSS\OssClient
     */
    public function getClient($accessKeyId, $accessKeySecret, $endpoint)
    {
        try{
            return new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        }catch (\OSS\Core\OssException $e) {
            throw new Exception($e->getMessage());
        }
        
    }
}