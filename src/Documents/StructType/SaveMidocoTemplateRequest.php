<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplate
     * @var \Pggns\MidocoApi\Documents\StructType\TemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\TemplateDTO $MidocoTemplate = null;
    /**
     * Constructor method for SaveMidocoTemplateRequest
     * @uses SaveMidocoTemplateRequest::setMidocoTemplate()
     * @param \Pggns\MidocoApi\Documents\StructType\TemplateDTO $midocoTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\TemplateDTO $midocoTemplate = null)
    {
        $this
            ->setMidocoTemplate($midocoTemplate);
    }
    /**
     * Get MidocoTemplate value
     * @return \Pggns\MidocoApi\Documents\StructType\TemplateDTO|null
     */
    public function getMidocoTemplate(): ?\Pggns\MidocoApi\Documents\StructType\TemplateDTO
    {
        return $this->MidocoTemplate;
    }
    /**
     * Set MidocoTemplate value
     * @param \Pggns\MidocoApi\Documents\StructType\TemplateDTO $midocoTemplate
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoTemplateRequest
     */
    public function setMidocoTemplate(?\Pggns\MidocoApi\Documents\StructType\TemplateDTO $midocoTemplate = null): self
    {
        $this->MidocoTemplate = $midocoTemplate;
        
        return $this;
    }
}
