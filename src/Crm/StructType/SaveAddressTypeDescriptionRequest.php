<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO $MidocoAddressTypeDescription = null;
    /**
     * Constructor method for SaveAddressTypeDescriptionRequest
     * @uses SaveAddressTypeDescriptionRequest::setMidocoAddressTypeDescription()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null)
    {
        $this
            ->setMidocoAddressTypeDescription($midocoAddressTypeDescription);
    }
    /**
     * Get MidocoAddressTypeDescription value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO|null
     */
    public function getMidocoAddressTypeDescription(): ?\Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO
    {
        return $this->MidocoAddressTypeDescription;
    }
    /**
     * Set MidocoAddressTypeDescription value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAddressTypeDescriptionRequest
     */
    public function setMidocoAddressTypeDescription(?\Pggns\MidocoApi\Api\Crm\StructType\AddressTypeDescriptionDTO $midocoAddressTypeDescription = null): self
    {
        $this->MidocoAddressTypeDescription = $midocoAddressTypeDescription;
        
        return $this;
    }
}
