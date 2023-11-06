<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMediatorTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for DeleteMediatorTypeRequest
     * @uses DeleteMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Documents\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}
