<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderRetentionPeriodRequest StructType
 * @subpackage Structs
 */
class GetOrderRetentionPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod
     */
    protected \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod;
    /**
     * Constructor method for GetOrderRetentionPeriodRequest
     * @uses GetOrderRetentionPeriodRequest::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(\Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod
     */
    public function getMidocoOrderRetentionPeriod(): \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrderRetentionPeriodRequest
     */
    public function setMidocoOrderRetentionPeriod(\Pggns\MidocoApi\OrderSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
