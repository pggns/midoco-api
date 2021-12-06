<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookOsstInsuranceRequest StructType
 * @subpackage Structs
 */
class BookOsstInsuranceRequest extends AbstractStructBase
{
    /**
     * The MidocoOSSTTravelData
     * Meta information extracted from the WSDL
     * - ref: MidocoOSSTTravelData
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData $MidocoOSSTTravelData = null;
    /**
     * Constructor method for BookOsstInsuranceRequest
     * @uses BookOsstInsuranceRequest::setMidocoOSSTTravelData()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData $midocoOSSTTravelData
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData $midocoOSSTTravelData = null)
    {
        $this
            ->setMidocoOSSTTravelData($midocoOSSTTravelData);
    }
    /**
     * Get MidocoOSSTTravelData value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData|null
     */
    public function getMidocoOSSTTravelData(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData
    {
        return $this->MidocoOSSTTravelData;
    }
    /**
     * Set MidocoOSSTTravelData value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData $midocoOSSTTravelData
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookOsstInsuranceRequest
     */
    public function setMidocoOSSTTravelData(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOSSTTravelData $midocoOSSTTravelData = null): self
    {
        $this->MidocoOSSTTravelData = $midocoOSSTTravelData;
        
        return $this;
    }
}
