<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveServiceStatusRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveServiceStatusRequest extends AbstractStructBase
{
    /**
     * The MidocoServiceStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoServiceStatus
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO
     */
    protected \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO $MidocoServiceStatus;
    /**
     * Constructor method for SaveServiceStatusRequest
     * @uses SaveServiceStatusRequest::setMidocoServiceStatus()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO $midocoServiceStatus
     */
    public function __construct(\Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO $midocoServiceStatus)
    {
        $this
            ->setMidocoServiceStatus($midocoServiceStatus);
    }
    /**
     * Get MidocoServiceStatus value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO
     */
    public function getMidocoServiceStatus(): \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO
    {
        return $this->MidocoServiceStatus;
    }
    /**
     * Set MidocoServiceStatus value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO $midocoServiceStatus
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusRequest
     */
    public function setMidocoServiceStatus(\Pggns\MidocoApi\OrderglobalSD\StructType\ServiceStatusDTO $midocoServiceStatus): self
    {
        $this->MidocoServiceStatus = $midocoServiceStatus;
        
        return $this;
    }
}
