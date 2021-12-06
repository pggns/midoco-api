<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveServiceStatusRequest StructType
 * @subpackage Structs
 */
class SaveServiceStatusRequest extends AbstractStructBase
{
    /**
     * The MidocoServiceStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoServiceStatus
     * @var \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO
     */
    protected \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $MidocoServiceStatus;
    /**
     * Constructor method for SaveServiceStatusRequest
     * @uses SaveServiceStatusRequest::setMidocoServiceStatus()
     * @param \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $midocoServiceStatus
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $midocoServiceStatus)
    {
        $this
            ->setMidocoServiceStatus($midocoServiceStatus);
    }
    /**
     * Get MidocoServiceStatus value
     * @return \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO
     */
    public function getMidocoServiceStatus(): \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO
    {
        return $this->MidocoServiceStatus;
    }
    /**
     * Set MidocoServiceStatus value
     * @param \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $midocoServiceStatus
     * @return \Pggns\MidocoApi\Documents\StructType\SaveServiceStatusRequest
     */
    public function setMidocoServiceStatus(\Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $midocoServiceStatus): self
    {
        $this->MidocoServiceStatus = $midocoServiceStatus;
        
        return $this;
    }
}
