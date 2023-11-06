<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidateAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoValidateAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoValidateAddress
     * @var \Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO $MidocoValidateAddress = null;
    /**
     * Constructor method for ValidateAddressRequest
     * @uses ValidateAddressRequest::setMidocoValidateAddress()
     * @param \Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO $midocoValidateAddress
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO $midocoValidateAddress = null)
    {
        $this
            ->setMidocoValidateAddress($midocoValidateAddress);
    }
    /**
     * Get MidocoValidateAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO|null
     */
    public function getMidocoValidateAddress(): ?\Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO
    {
        return $this->MidocoValidateAddress;
    }
    /**
     * Set MidocoValidateAddress value
     * @param \Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO $midocoValidateAddress
     * @return \Pggns\MidocoApi\Crm\StructType\ValidateAddressRequest
     */
    public function setMidocoValidateAddress(?\Pggns\MidocoApi\Crm\StructType\ValidateAddressDTO $midocoValidateAddress = null): self
    {
        $this->MidocoValidateAddress = $midocoValidateAddress;
        
        return $this;
    }
}
