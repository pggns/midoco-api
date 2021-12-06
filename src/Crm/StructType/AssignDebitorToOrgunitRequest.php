<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignDebitorToOrgunitRequest StructType
 * @subpackage Structs
 */
class AssignDebitorToOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitorAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitorAssign
     * @var \Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO $MidocoDebitorAssign = null;
    /**
     * Constructor method for AssignDebitorToOrgunitRequest
     * @uses AssignDebitorToOrgunitRequest::setMidocoDebitorAssign()
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign = null)
    {
        $this
            ->setMidocoDebitorAssign($midocoDebitorAssign);
    }
    /**
     * Get MidocoDebitorAssign value
     * @return \Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO|null
     */
    public function getMidocoDebitorAssign(): ?\Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO
    {
        return $this->MidocoDebitorAssign;
    }
    /**
     * Set MidocoDebitorAssign value
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign
     * @return \Pggns\MidocoApi\Crm\StructType\AssignDebitorToOrgunitRequest
     */
    public function setMidocoDebitorAssign(?\Pggns\MidocoApi\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign = null): self
    {
        $this->MidocoDebitorAssign = $midocoDebitorAssign;
        
        return $this;
    }
}
