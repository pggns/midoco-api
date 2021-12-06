<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionsRequest StructType
 * @subpackage Structs
 */
class GetVatDivisionsRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for GetVatDivisionsRequest
     * @uses GetVatDivisionsRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetVatDivisionsRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Api\Documents\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
