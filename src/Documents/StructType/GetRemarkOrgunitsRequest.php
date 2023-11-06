<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkOrgunitsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRemarkOrgunitsRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * Constructor method for GetRemarkOrgunitsRequest
     * @uses GetRemarkOrgunitsRequest::setMidocoRemarkOrgunit()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Documents\StructType\GetRemarkOrgunitsRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
}
