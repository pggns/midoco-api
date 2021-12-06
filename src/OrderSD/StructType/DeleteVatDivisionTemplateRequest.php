<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatDivisionTemplateRequest StructType
 * @subpackage Structs
 */
class DeleteVatDivisionTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for DeleteVatDivisionTemplateRequest
     * @uses DeleteVatDivisionTemplateRequest::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteVatDivisionTemplateRequest
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatDivisionTemplate $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
}
