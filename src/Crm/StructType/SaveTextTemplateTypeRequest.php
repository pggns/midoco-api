<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTextTemplateTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTextTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTextTemplateType
     * @var \Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO $MidocoTextTemplateType = null;
    /**
     * Constructor method for SaveTextTemplateTypeRequest
     * @uses SaveTextTemplateTypeRequest::setMidocoTextTemplateType()
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null)
    {
        $this
            ->setMidocoTextTemplateType($midocoTextTemplateType);
    }
    /**
     * Get MidocoTextTemplateType value
     * @return \Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO|null
     */
    public function getMidocoTextTemplateType(): ?\Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO
    {
        return $this->MidocoTextTemplateType;
    }
    /**
     * Set MidocoTextTemplateType value
     * @param \Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType
     * @return \Pggns\MidocoApi\Crm\StructType\SaveTextTemplateTypeRequest
     */
    public function setMidocoTextTemplateType(?\Pggns\MidocoApi\Crm\StructType\TextTemplateTypeDTO $midocoTextTemplateType = null): self
    {
        $this->MidocoTextTemplateType = $midocoTextTemplateType;
        
        return $this;
    }
}
