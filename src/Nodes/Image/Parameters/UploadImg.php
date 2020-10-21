<?php

namespace Shopee\Nodes\Image\Parameters;

use Shopee\RequestParameters;

class UploadImg extends RequestParameters
{
    /**
     * @return string[]
     */
    public function getImages(): array
    {
        return $this->parameters['images'];
    }

    /**
     * Set the image URLs of the item.
     * It contains at most 9 URLs.Could get the url by api GetItemDetail
     *
     * @param string[] $images
     * @return $this
     */
    public function setImages(array $images)
    {
        $this->parameters['images'] = $images;

        return $this;
    }
}