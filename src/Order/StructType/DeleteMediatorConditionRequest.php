<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMediatorConditionRequest StructType
 * @subpackage Structs
 */
class DeleteMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for DeleteMediatorConditionRequest
     * @uses DeleteMediatorConditionRequest::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo $mediatorConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo|null
     */
    public function getMediatorConditionInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * Set MediatorConditionInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo $mediatorConditionInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\Api\Order\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
