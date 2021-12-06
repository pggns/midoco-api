<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatDivisionTemplateRequest StructType
 * @subpackage Structs
 */
class SaveVatDivisionTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for SaveVatDivisionTemplateRequest
     * @uses SaveVatDivisionTemplateRequest::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveVatDivisionTemplateRequest
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
}
