<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeassignDebitorToOrgunitRequest StructType
 * @subpackage Structs
 */
class DeassignDebitorToOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitorAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitorAssign
     * @var \Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO $MidocoDebitorAssign = null;
    /**
     * Constructor method for DeassignDebitorToOrgunitRequest
     * @uses DeassignDebitorToOrgunitRequest::setMidocoDebitorAssign()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign = null)
    {
        $this
            ->setMidocoDebitorAssign($midocoDebitorAssign);
    }
    /**
     * Get MidocoDebitorAssign value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO|null
     */
    public function getMidocoDebitorAssign(): ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO
    {
        return $this->MidocoDebitorAssign;
    }
    /**
     * Set MidocoDebitorAssign value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeassignDebitorToOrgunitRequest
     */
    public function setMidocoDebitorAssign(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorAssignDTO $midocoDebitorAssign = null): self
    {
        $this->MidocoDebitorAssign = $midocoDebitorAssign;
        
        return $this;
    }
}
