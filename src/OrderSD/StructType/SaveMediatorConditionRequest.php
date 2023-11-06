<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SaveMediatorConditionRequest
     * @uses SaveMediatorConditionRequest::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $mediatorConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo|null
     */
    public function getMediatorConditionInfo(): ?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * Set MediatorConditionInfo value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $mediatorConditionInfo
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
