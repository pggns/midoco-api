<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDunningTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for GetDunningTemplatesRequest
     * @uses GetDunningTemplatesRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetDunningTemplatesRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}
