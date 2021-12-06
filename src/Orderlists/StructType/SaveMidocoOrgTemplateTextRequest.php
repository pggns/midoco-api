<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText $MidocoOrgTemplateText = null;
    /**
     * Constructor method for SaveMidocoOrgTemplateTextRequest
     * @uses SaveMidocoOrgTemplateTextRequest::setMidocoOrgTemplateText()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null)
    {
        $this
            ->setMidocoOrgTemplateText($midocoOrgTemplateText);
    }
    /**
     * Get MidocoOrgTemplateText value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText|null
     */
    public function getMidocoOrgTemplateText(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText
    {
        return $this->MidocoOrgTemplateText;
    }
    /**
     * Set MidocoOrgTemplateText value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoOrgTemplateTextRequest
     */
    public function setMidocoOrgTemplateText(?\Pggns\MidocoApi\Orderlists\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null): self
    {
        $this->MidocoOrgTemplateText = $midocoOrgTemplateText;
        
        return $this;
    }
}
