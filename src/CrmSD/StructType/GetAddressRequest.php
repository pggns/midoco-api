<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAddressRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: retrieves an address by its ID
 * @subpackage Structs
 */
class GetAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmAddressID
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmAddressID
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO $MidocoCrmAddressID = null;
    /**
     * Constructor method for GetAddressRequest
     * @uses GetAddressRequest::setMidocoCrmAddressID()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO $midocoCrmAddressID
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO $midocoCrmAddressID = null)
    {
        $this
            ->setMidocoCrmAddressID($midocoCrmAddressID);
    }
    /**
     * Get MidocoCrmAddressID value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO|null
     */
    public function getMidocoCrmAddressID(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO
    {
        return $this->MidocoCrmAddressID;
    }
    /**
     * Set MidocoCrmAddressID value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO $midocoCrmAddressID
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAddressRequest
     */
    public function setMidocoCrmAddressID(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddressIDDTO $midocoCrmAddressID = null): self
    {
        $this->MidocoCrmAddressID = $midocoCrmAddressID;
        
        return $this;
    }
}
