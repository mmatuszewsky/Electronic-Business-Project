<?php

namespace PrestaChamps\PrestaShop\Traits;

trait ShopIdTrait
{
    public function getShopId()
    {
        return \Mailchimppro::shopIdTransformer(\Context::getContext()->shop);
    }
}
