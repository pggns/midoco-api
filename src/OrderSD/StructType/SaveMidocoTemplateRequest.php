<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateRequest StructType
 * @subpackage Structs
 */
class SaveMidocoTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplate
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO $MidocoTemplate = null;
    /**
     * Constructor method for SaveMidocoTemplateRequest
     * @uses SaveMidocoTemplateRequest::setMidocoTemplate()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO $midocoTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO $midocoTemplate = null)
    {
        $this
            ->setMidocoTemplate($midocoTemplate);
    }
    /**
     * Get MidocoTemplate value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO|null
     */
    public function getMidocoTemplate(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO
    {
        return $this->MidocoTemplate;
    }
    /**
     * Set MidocoTemplate value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO $midocoTemplate
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveMidocoTemplateRequest
     */
    public function setMidocoTemplate(?\Pggns\MidocoApi\Api\OrderSD\StructType\TemplateDTO $midocoTemplate = null): self
    {
        $this->MidocoTemplate = $midocoTemplate;
        
        return $this;
    }
}
