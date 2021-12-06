<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMarketingKeyRequest StructType
 * @subpackage Structs
 */
class SaveMarketingKeyRequest extends AbstractStructBase
{
    /**
     * The MidocoMarketingKey
     * Meta information extracted from the WSDL
     * - ref: MidocoMarketingKey
     * @var \Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO $MidocoMarketingKey = null;
    /**
     * Constructor method for SaveMarketingKeyRequest
     * @uses SaveMarketingKeyRequest::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO $midocoMarketingKey
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO $midocoMarketingKey = null)
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO|null
     */
    public function getMidocoMarketingKey(): ?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * Set MidocoMarketingKey value
     * @param \Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO $midocoMarketingKey
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMarketingKeyRequest
     */
    public function setMidocoMarketingKey(?\Pggns\MidocoApi\Documents\StructType\MarketingKeyDTO $midocoMarketingKey = null): self
    {
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
}
