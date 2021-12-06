<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmSubjectAssignRequest StructType
 * @subpackage Structs
 */
class DeleteCrmSubjectAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmSubjectAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmSubjectAssign
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign $MidocoCrmSubjectAssign = null;
    /**
     * Constructor method for DeleteCrmSubjectAssignRequest
     * @uses DeleteCrmSubjectAssignRequest::setMidocoCrmSubjectAssign()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign = null)
    {
        $this
            ->setMidocoCrmSubjectAssign($midocoCrmSubjectAssign);
    }
    /**
     * Get MidocoCrmSubjectAssign value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign|null
     */
    public function getMidocoCrmSubjectAssign(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign
    {
        return $this->MidocoCrmSubjectAssign;
    }
    /**
     * Set MidocoCrmSubjectAssign value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmSubjectAssignRequest
     */
    public function setMidocoCrmSubjectAssign(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmSubjectAssign $midocoCrmSubjectAssign = null): self
    {
        $this->MidocoCrmSubjectAssign = $midocoCrmSubjectAssign;
        
        return $this;
    }
}
