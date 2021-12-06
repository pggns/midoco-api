<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorConditionRequest StructType
 * @subpackage Structs
 */
class SearchMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SearchMediatorConditionRequest
     * @uses SearchMediatorConditionRequest::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo $mediatorConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo|null
     */
    public function getMediatorConditionInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * Set MediatorConditionInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo $mediatorConditionInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\Orderlists\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
