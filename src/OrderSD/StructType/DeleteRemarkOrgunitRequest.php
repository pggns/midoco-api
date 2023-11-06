<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * Constructor method for DeleteRemarkOrgunitRequest
     * @uses DeleteRemarkOrgunitRequest::setMidocoRemarkOrgunit()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteRemarkOrgunitRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\OrderSD\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
}
