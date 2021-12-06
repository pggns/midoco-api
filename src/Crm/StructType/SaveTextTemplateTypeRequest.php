<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTextTemplateTypeRequest StructType
 * @subpackage Structs
 */
class SaveTextTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTextTemplateType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO $MidocoTextTemplateType = null;
    /**
     * Constructor method for SaveTextTemplateTypeRequest
     * @uses SaveTextTemplateTypeRequest::setMidocoTextTemplateType()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null)
    {
        $this
            ->setMidocoTextTemplateType($midocoTextTemplateType);
    }
    /**
     * Get MidocoTextTemplateType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO|null
     */
    public function getMidocoTextTemplateType(): ?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO
    {
        return $this->MidocoTextTemplateType;
    }
    /**
     * Set MidocoTextTemplateType value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveTextTemplateTypeRequest
     */
    public function setMidocoTextTemplateType(?\Pggns\MidocoApi\Api\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null): self
    {
        $this->MidocoTextTemplateType = $midocoTextTemplateType;
        
        return $this;
    }
}
