<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplateAssignsRequest StructType
 * @subpackage Structs
 */
class GetDunningTemplateAssignsRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for GetDunningTemplateAssignsRequest
     * @uses GetDunningTemplateAssignsRequest::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO|null
     */
    public function getMidocoDunningTemplateAssign(): ?\Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @param \Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetDunningTemplateAssignsRequest
     */
    public function setMidocoDunningTemplateAssign(?\Pggns\MidocoApi\Orderlists\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null): self
    {
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
}
