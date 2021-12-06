<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatDivisionRequest StructType
 * @subpackage Structs
 */
class SaveVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for SaveVatDivisionRequest
     * @uses SaveVatDivisionRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveVatDivisionRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Api\Order\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}