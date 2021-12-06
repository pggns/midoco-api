<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductKeysFromSpecifiedSupplierRequest StructType
 * @subpackage Structs
 */
class GetProductKeysFromSpecifiedSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelInfo
     * @var \Pggns\MidocoApi\Documents\StructType\TravelInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\TravelInfoDTO $MidocoTravelInfo = null;
    /**
     * Constructor method for GetProductKeysFromSpecifiedSupplierRequest
     * @uses GetProductKeysFromSpecifiedSupplierRequest::setMidocoTravelInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\TravelInfoDTO $midocoTravelInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\TravelInfoDTO $midocoTravelInfo = null)
    {
        $this
            ->setMidocoTravelInfo($midocoTravelInfo);
    }
    /**
     * Get MidocoTravelInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\TravelInfoDTO|null
     */
    public function getMidocoTravelInfo(): ?\Pggns\MidocoApi\Documents\StructType\TravelInfoDTO
    {
        return $this->MidocoTravelInfo;
    }
    /**
     * Set MidocoTravelInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\TravelInfoDTO $midocoTravelInfo
     * @return \Pggns\MidocoApi\Documents\StructType\GetProductKeysFromSpecifiedSupplierRequest
     */
    public function setMidocoTravelInfo(?\Pggns\MidocoApi\Documents\StructType\TravelInfoDTO $midocoTravelInfo = null): self
    {
        $this->MidocoTravelInfo = $midocoTravelInfo;
        
        return $this;
    }
}
