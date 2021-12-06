<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierTraveltypesRequest StructType
 * @subpackage Structs
 */
class GetSupplierTraveltypesRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTraveltype
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTraveltype
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $MidocoSupplierTraveltype = null;
    /**
     * Constructor method for GetSupplierTraveltypesRequest
     * @uses GetSupplierTraveltypesRequest::setMidocoSupplierTraveltype()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null)
    {
        $this
            ->setMidocoSupplierTraveltype($midocoSupplierTraveltype);
    }
    /**
     * Get MidocoSupplierTraveltype value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO|null
     */
    public function getMidocoSupplierTraveltype(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO
    {
        return $this->MidocoSupplierTraveltype;
    }
    /**
     * Set MidocoSupplierTraveltype value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierTraveltypesRequest
     */
    public function setMidocoSupplierTraveltype(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null): self
    {
        $this->MidocoSupplierTraveltype = $midocoSupplierTraveltype;
        
        return $this;
    }
}
