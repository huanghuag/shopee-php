<?php

namespace Shopee\Nodes\Image;

use Shopee\Nodes\NodeAbstract;
use Shopee\RequestParameters;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Image extends NodeAbstract
{
    /**
     * Use this api to add shop discount activity.
     *
     * @param array|Parameters\UploadImg $parameters
     * @return ResponseData
     */
    public function upload($parameters = []): ResponseData
    {
        return $this->post('/api/v1/image/upload', $parameters);
    }
}
