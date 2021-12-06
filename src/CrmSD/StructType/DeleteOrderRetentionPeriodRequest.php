<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderRetentionPeriodRequest StructType
 * @subpackage Structs
 */
class DeleteOrderRetentionPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod;
    /**
     * Constructor method for DeleteOrderRetentionPeriodRequest
     * @uses DeleteOrderRetentionPeriodRequest::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod
     */
    public function getMidocoOrderRetentionPeriod(): \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteOrderRetentionPeriodRequest
     */
    public function setMidocoOrderRetentionPeriod(\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
