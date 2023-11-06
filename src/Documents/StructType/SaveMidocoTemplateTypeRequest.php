<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplateType
     * @var \Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO $MidocoTemplateType = null;
    /**
     * Constructor method for SaveMidocoTemplateTypeRequest
     * @uses SaveMidocoTemplateTypeRequest::setMidocoTemplateType()
     * @param \Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO $midocoTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO $midocoTemplateType = null)
    {
        $this
            ->setMidocoTemplateType($midocoTemplateType);
    }
    /**
     * Get MidocoTemplateType value
     * @return \Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO|null
     */
    public function getMidocoTemplateType(): ?\Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO
    {
        return $this->MidocoTemplateType;
    }
    /**
     * Set MidocoTemplateType value
     * @param \Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO $midocoTemplateType
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoTemplateTypeRequest
     */
    public function setMidocoTemplateType(?\Pggns\MidocoApi\Documents\StructType\TemplateTypeDTO $midocoTemplateType = null): self
    {
        $this->MidocoTemplateType = $midocoTemplateType;
        
        return $this;
    }
}
