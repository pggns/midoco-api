<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SearchMediatorConditionRequest
     * @uses SearchMediatorConditionRequest::setMediatorConditionInfo()
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\SearchMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\OrderSD\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
