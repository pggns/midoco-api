<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMediatorTypeRequest StructType
 * @subpackage Structs
 */
class DeleteMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for DeleteMediatorTypeRequest
     * @uses DeleteMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Api\OrderSD\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}