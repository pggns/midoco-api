<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierTraveltypeRequest StructType
 * @subpackage Structs
 */
class SaveSupplierTraveltypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTraveltype
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTraveltype
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO $MidocoSupplierTraveltype = null;
    /**
     * Constructor method for SaveSupplierTraveltypeRequest
     * @uses SaveSupplierTraveltypeRequest::setMidocoSupplierTraveltype()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null)
    {
        $this
            ->setMidocoSupplierTraveltype($midocoSupplierTraveltype);
    }
    /**
     * Get MidocoSupplierTraveltype value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO|null
     */
    public function getMidocoSupplierTraveltype(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO
    {
        return $this->MidocoSupplierTraveltype;
    }
    /**
     * Set MidocoSupplierTraveltype value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierTraveltypeRequest
     */
    public function setMidocoSupplierTraveltype(?\Pggns\MidocoApi\OrderSD\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null): self
    {
        $this->MidocoSupplierTraveltype = $midocoSupplierTraveltype;
        
        return $this;
    }
}
