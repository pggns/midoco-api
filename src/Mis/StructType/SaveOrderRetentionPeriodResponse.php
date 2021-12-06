<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRetentionPeriodResponse StructType
 * @subpackage Structs
 */
class SaveOrderRetentionPeriodResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for SaveOrderRetentionPeriodResponse
     * @uses SaveOrderRetentionPeriodResponse::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod|null
     */
    public function getMidocoOrderRetentionPeriod(): ?\Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\Mis\StructType\SaveOrderRetentionPeriodResponse
     */
    public function setMidocoOrderRetentionPeriod(?\Pggns\MidocoApi\Mis\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
