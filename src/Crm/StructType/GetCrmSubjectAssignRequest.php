<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmSubjectAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmSubjectAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmSubjectAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmSubjectAssign
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $MidocoCrmSubjectAssign = null;
    /**
     * Constructor method for GetCrmSubjectAssignRequest
     * @uses GetCrmSubjectAssignRequest::setMidocoCrmSubjectAssign()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign = null)
    {
        $this
            ->setMidocoCrmSubjectAssign($midocoCrmSubjectAssign);
    }
    /**
     * Get MidocoCrmSubjectAssign value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign|null
     */
    public function getMidocoCrmSubjectAssign(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign
    {
        return $this->MidocoCrmSubjectAssign;
    }
    /**
     * Set MidocoCrmSubjectAssign value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmSubjectAssignRequest
     */
    public function setMidocoCrmSubjectAssign(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign = null): self
    {
        $this->MidocoCrmSubjectAssign = $midocoCrmSubjectAssign;
        
        return $this;
    }
}
