<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressRequest StructType
 * @subpackage Structs
 */
class ValidateAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoValidateAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoValidateAddress
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO $MidocoValidateAddress = null;
    /**
     * Constructor method for ValidateAddressRequest
     * @uses ValidateAddressRequest::setMidocoValidateAddress()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress = null)
    {
        $this
            ->setMidocoValidateAddress($midocoValidateAddress);
    }
    /**
     * Get MidocoValidateAddress value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO|null
     */
    public function getMidocoValidateAddress(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO
    {
        return $this->MidocoValidateAddress;
    }
    /**
     * Set MidocoValidateAddress value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressRequest
     */
    public function setMidocoValidateAddress(?\Pggns\MidocoApi\Api\CrmSD\StructType\ValidateAddressDTO $midocoValidateAddress = null): self
    {
        $this->MidocoValidateAddress = $midocoValidateAddress;
        
        return $this;
    }
}
