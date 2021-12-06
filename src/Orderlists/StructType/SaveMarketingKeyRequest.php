<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO $MidocoMarketingKey = null;
    /**
     * Constructor method for SaveMarketingKeyRequest
     * @uses SaveMarketingKeyRequest::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO $midocoMarketingKey
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO $midocoMarketingKey = null)
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO|null
     */
    public function getMidocoMarketingKey(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * Set MidocoMarketingKey value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO $midocoMarketingKey
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMarketingKeyRequest
     */
    public function setMidocoMarketingKey(?\Pggns\MidocoApi\Api\Orderlists\StructType\MarketingKeyDTO $midocoMarketingKey = null): self
    {
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
}
