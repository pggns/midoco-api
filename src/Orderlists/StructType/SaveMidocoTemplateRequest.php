<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\TemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\TemplateDTO $MidocoTemplate = null;
    /**
     * Constructor method for SaveMidocoTemplateRequest
     * @uses SaveMidocoTemplateRequest::setMidocoTemplate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\TemplateDTO $midocoTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\TemplateDTO $midocoTemplate = null)
    {
        $this
            ->setMidocoTemplate($midocoTemplate);
    }
    /**
     * Get MidocoTemplate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\TemplateDTO|null
     */
    public function getMidocoTemplate(): ?\Pggns\MidocoApi\Orderlists\StructType\TemplateDTO
    {
        return $this->MidocoTemplate;
    }
    /**
     * Set MidocoTemplate value
     * @param \Pggns\MidocoApi\Orderlists\StructType\TemplateDTO $midocoTemplate
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoTemplateRequest
     */
    public function setMidocoTemplate(?\Pggns\MidocoApi\Orderlists\StructType\TemplateDTO $midocoTemplate = null): self
    {
        $this->MidocoTemplate = $midocoTemplate;
        
        return $this;
    }
}
