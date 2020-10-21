<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class TierVariation extends RequestParameters
{
    public function getName(): string
    {
        return $this->parameters['name'];
    }

    /**
     * @param int $attributeId
     * @return $this
     */
    public function setName(string $attributeId)
    {
        $this->parameters['name'] = $attributeId;

        return $this;
    }
    /**
     * @param String[]
     * @return $this
     */
    public function getOptions(): array
    {
        return $this->parameters['options'];
    }

    /**
     * @param String[]
     * @return $this
     */
    public function setOptions(array $value)
    {
        $this->parameters['options'] = $value;

        return $this;
    }
    /**
     * @param String[]
     * @return $this
     */
    public function getImagesUrl():array
    {
        return $this->parameters['images_url'];

        return $this;
    }
    /**
     * @param String[]
     * @return $this
     */
    public function setImagesUrl(array $value)
    {
        $this->parameters['images_url'] = $value;

        return $this;
    }

}
