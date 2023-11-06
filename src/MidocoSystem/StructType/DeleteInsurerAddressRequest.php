<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInsurerAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteInsurerAddressRequest extends AbstractStructBase
{
    /**
     * The addressId
     * @var int|null
     */
    protected ?int $addressId = null;
    /**
     * Constructor method for DeleteInsurerAddressRequest
     * @uses DeleteInsurerAddressRequest::setAddressId()
     * @param int $addressId
     */
    public function __construct(?int $addressId = null)
    {
        $this
            ->setAddressId($addressId);
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteInsurerAddressRequest
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
}
