<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrgTemplateTextRequest StructType
 * @subpackage Structs
 */
class SaveMidocoOrgTemplateTextRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgTemplateText
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText $MidocoOrgTemplateText = null;
    /**
     * Constructor method for SaveMidocoOrgTemplateTextRequest
     * @uses SaveMidocoOrgTemplateTextRequest::setMidocoOrgTemplateText()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null)
    {
        $this
            ->setMidocoOrgTemplateText($midocoOrgTemplateText);
    }
    /**
     * Get MidocoOrgTemplateText value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText|null
     */
    public function getMidocoOrgTemplateText(): ?\Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText
    {
        return $this->MidocoOrgTemplateText;
    }
    /**
     * Set MidocoOrgTemplateText value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoOrgTemplateTextRequest
     */
    public function setMidocoOrgTemplateText(?\Pggns\MidocoApi\Crm\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null): self
    {
        $this->MidocoOrgTemplateText = $midocoOrgTemplateText;
        
        return $this;
    }
}
