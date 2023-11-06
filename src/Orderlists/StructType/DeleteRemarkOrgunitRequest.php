<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRemarkOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteRemarkOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * Constructor method for DeleteRemarkOrgunitRequest
     * @uses DeleteRemarkOrgunitRequest::setMidocoRemarkOrgunit()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteRemarkOrgunitRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
}
