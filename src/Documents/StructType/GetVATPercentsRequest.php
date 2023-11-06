<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVATPercentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVATPercentsRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The isIncoming
     * @var bool|null
     */
    protected ?bool $isIncoming = null;
    /**
     * The returnVatFree
     * @var bool|null
     */
    protected ?bool $returnVatFree = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * Constructor method for GetVATPercentsRequest
     * @uses GetVATPercentsRequest::setOrgUnit()
     * @uses GetVATPercentsRequest::setValidDate()
     * @uses GetVATPercentsRequest::setIsIncoming()
     * @uses GetVATPercentsRequest::setReturnVatFree()
     * @uses GetVATPercentsRequest::setCountry()
     * @param string $orgUnit
     * @param string $validDate
     * @param bool $isIncoming
     * @param bool $returnVatFree
     * @param string $country
     */
    public function __construct(?string $orgUnit = null, ?string $validDate = null, ?bool $isIncoming = null, ?bool $returnVatFree = null, ?string $country = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setValidDate($validDate)
            ->setIsIncoming($isIncoming)
            ->setReturnVatFree($returnVatFree)
            ->setCountry($country);
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get isIncoming value
     * @return bool|null
     */
    public function getIsIncoming(): ?bool
    {
        return $this->isIncoming;
    }
    /**
     * Set isIncoming value
     * @param bool $isIncoming
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsRequest
     */
    public function setIsIncoming(?bool $isIncoming = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIncoming) && !is_bool($isIncoming)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIncoming, true), gettype($isIncoming)), __LINE__);
        }
        $this->isIncoming = $isIncoming;
        
        return $this;
    }
    /**
     * Get returnVatFree value
     * @return bool|null
     */
    public function getReturnVatFree(): ?bool
    {
        return $this->returnVatFree;
    }
    /**
     * Set returnVatFree value
     * @param bool $returnVatFree
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsRequest
     */
    public function setReturnVatFree(?bool $returnVatFree = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnVatFree) && !is_bool($returnVatFree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnVatFree, true), gettype($returnVatFree)), __LINE__);
        }
        $this->returnVatFree = $returnVatFree;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsRequest
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
}
