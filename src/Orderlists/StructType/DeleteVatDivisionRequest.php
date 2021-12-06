<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatDivisionRequest StructType
 * @subpackage Structs
 */
class DeleteVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for DeleteVatDivisionRequest
     * @uses DeleteVatDivisionRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteVatDivisionRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Api\Orderlists\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
