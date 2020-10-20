<?php

namespace Shopee\Nodes\Item\Parameters;

use Shopee\RequestParameters;

class TierVarInit extends RequestParameters
{
    use CategoryIdTrait;

    public function getTierVariation(): string
    {
        return $this->parameters['tier_variation'];
    }

    /**
     *  设置规格 object[]   Tier_variation list. Up to 2 tiers.
     *name Required String Tier variation name.
     * options Required String[]   Tier variation value options list. Option length should be under 20. Quantity of combinations of all 2 tier options is up to 50.
     * images_url
     *
     * @param string $name
     *
     * @return $this
     */
    public function setTierVariation(string $name)
    {
        $this->parameters['tier_variation'] = $name;

        return $this;
    }

    public function getVariation(): string
    {
        return $this->parameters['variation'];
    }

    /**
     * 设置变体  Object[]
     *tier_index  Required  uint32  [0,1]  A list of tier variation combination index, which indicates variation's option position in tier_variation['options'] list. e.g. [0,1] means tier variation 1 option 1 and tier variation 2 option 2.
        stock  Required uint32 Stock value of this variation item. The original variation stock will be override when calling this API to initialize 2-tier structure for an existed item. 0 stock will make this variation a greyout option for buyer.
        price  Required float  Price value of this variation item. The original variation price will be override when calling this API to initialize 2-tier structure for an existed item.
        variation_sku
     * @param string $description
     * @return $this
     */
    public function setVariation(string $description)
    {
        $this->parameters['description'] = $description;

        return $this;
    }

}
