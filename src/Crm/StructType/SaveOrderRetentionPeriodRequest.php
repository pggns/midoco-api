<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRetentionPeriodRequest StructType
 * @subpackage Structs
 */
class SaveOrderRetentionPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod;
    /**
     * Constructor method for SaveOrderRetentionPeriodRequest
     * @uses SaveOrderRetentionPeriodRequest::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod
     */
    public function getMidocoOrderRetentionPeriod(): \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\Crm\StructType\SaveOrderRetentionPeriodRequest
     */
    public function setMidocoOrderRetentionPeriod(\Pggns\MidocoApi\Crm\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
