<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAmadeusExportStringRequest StructType
 * @subpackage Structs
 */
class GetAmadeusExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * The returnJson
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $returnJson = null;
    /**
     * Constructor method for GetAmadeusExportStringRequest
     * @uses GetAmadeusExportStringRequest::setMidocoTravelItem()
     * @uses GetAmadeusExportStringRequest::setReturnJson()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @param bool $returnJson
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem = null, ?bool $returnJson = false)
    {
        $this
            ->setMidocoTravelItem($midocoTravelItem)
            ->setReturnJson($returnJson);
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringRequest
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
    /**
     * Get returnJson value
     * @return bool|null
     */
    public function getReturnJson(): ?bool
    {
        return $this->returnJson;
    }
    /**
     * Set returnJson value
     * @param bool $returnJson
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringRequest
     */
    public function setReturnJson(?bool $returnJson = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnJson) && !is_bool($returnJson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnJson, true), gettype($returnJson)), __LINE__);
        }
        $this->returnJson = $returnJson;
        
        return $this;
    }
}
