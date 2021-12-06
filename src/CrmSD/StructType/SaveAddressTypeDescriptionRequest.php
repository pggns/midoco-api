<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressTypeDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveAddressTypeDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoAddressTypeDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoAddressTypeDescription
     * @var \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $MidocoAddressTypeDescription = null;
    /**
     * Constructor method for SaveAddressTypeDescriptionRequest
     * @uses SaveAddressTypeDescriptionRequest::setMidocoAddressTypeDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null)
    {
        $this
            ->setMidocoAddressTypeDescription($midocoAddressTypeDescription);
    }
    /**
     * Get MidocoAddressTypeDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO|null
     */
    public function getMidocoAddressTypeDescription(): ?\Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO
    {
        return $this->MidocoAddressTypeDescription;
    }
    /**
     * Set MidocoAddressTypeDescription value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveAddressTypeDescriptionRequest
     */
    public function setMidocoAddressTypeDescription(?\Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null): self
    {
        $this->MidocoAddressTypeDescription = $midocoAddressTypeDescription;
        
        return $this;
    }
}
