<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExistingVoucherNumberRequest StructType
 * @subpackage Structs
 */
class GetExistingVoucherNumberRequest extends AbstractStructBase
{
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The dateFrom
     * @var string|null
     */
    protected ?string $dateFrom = null;
    /**
     * The dateUntil
     * @var string|null
     */
    protected ?string $dateUntil = null;
    /**
     * The showWithZeroPrice
     * @var bool|null
     */
    protected ?bool $showWithZeroPrice = null;
    /**
     * The extendedInfo
     * @var bool|null
     */
    protected ?bool $extendedInfo = null;
    /**
     * The sellitemId
     * @var int|null
     */
    protected ?int $sellitemId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The voucherType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $voucherType = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * Constructor method for GetExistingVoucherNumberRequest
     * @uses GetExistingVoucherNumberRequest::setVoucherNo()
     * @uses GetExistingVoucherNumberRequest::setDateFrom()
     * @uses GetExistingVoucherNumberRequest::setDateUntil()
     * @uses GetExistingVoucherNumberRequest::setShowWithZeroPrice()
     * @uses GetExistingVoucherNumberRequest::setExtendedInfo()
     * @uses GetExistingVoucherNumberRequest::setSellitemId()
     * @uses GetExistingVoucherNumberRequest::setUnitName()
     * @uses GetExistingVoucherNumberRequest::setVoucherType()
     * @uses GetExistingVoucherNumberRequest::setSecurityCode()
     * @param string $voucherNo
     * @param string $dateFrom
     * @param string $dateUntil
     * @param bool $showWithZeroPrice
     * @param bool $extendedInfo
     * @param int $sellitemId
     * @param string $unitName
     * @param string[] $voucherType
     * @param string $securityCode
     */
    public function __construct(?string $voucherNo = null, ?string $dateFrom = null, ?string $dateUntil = null, ?bool $showWithZeroPrice = null, ?bool $extendedInfo = null, ?int $sellitemId = null, ?string $unitName = null, ?array $voucherType = null, ?string $securityCode = null)
    {
        $this
            ->setVoucherNo($voucherNo)
            ->setDateFrom($dateFrom)
            ->setDateUntil($dateUntil)
            ->setShowWithZeroPrice($showWithZeroPrice)
            ->setExtendedInfo($extendedInfo)
            ->setSellitemId($sellitemId)
            ->setUnitName($unitName)
            ->setVoucherType($voucherType)
            ->setSecurityCode($securityCode);
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get dateFrom value
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param string $dateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setDateFrom(?string $dateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        $this->dateFrom = $dateFrom;
        
        return $this;
    }
    /**
     * Get dateUntil value
     * @return string|null
     */
    public function getDateUntil(): ?string
    {
        return $this->dateUntil;
    }
    /**
     * Set dateUntil value
     * @param string $dateUntil
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setDateUntil(?string $dateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($dateUntil) && !is_string($dateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateUntil, true), gettype($dateUntil)), __LINE__);
        }
        $this->dateUntil = $dateUntil;
        
        return $this;
    }
    /**
     * Get showWithZeroPrice value
     * @return bool|null
     */
    public function getShowWithZeroPrice(): ?bool
    {
        return $this->showWithZeroPrice;
    }
    /**
     * Set showWithZeroPrice value
     * @param bool $showWithZeroPrice
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setShowWithZeroPrice(?bool $showWithZeroPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showWithZeroPrice) && !is_bool($showWithZeroPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showWithZeroPrice, true), gettype($showWithZeroPrice)), __LINE__);
        }
        $this->showWithZeroPrice = $showWithZeroPrice;
        
        return $this;
    }
    /**
     * Get extendedInfo value
     * @return bool|null
     */
    public function getExtendedInfo(): ?bool
    {
        return $this->extendedInfo;
    }
    /**
     * Set extendedInfo value
     * @param bool $extendedInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setExtendedInfo(?bool $extendedInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($extendedInfo) && !is_bool($extendedInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extendedInfo, true), gettype($extendedInfo)), __LINE__);
        }
        $this->extendedInfo = $extendedInfo;
        
        return $this;
    }
    /**
     * Get sellitemId value
     * @return int|null
     */
    public function getSellitemId(): ?int
    {
        return $this->sellitemId;
    }
    /**
     * Set sellitemId value
     * @param int $sellitemId
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setSellitemId(?int $sellitemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellitemId) && !(is_int($sellitemId) || ctype_digit($sellitemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellitemId, true), gettype($sellitemId)), __LINE__);
        }
        $this->sellitemId = $sellitemId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get voucherType value
     * @return string[]
     */
    public function getVoucherType(): ?array
    {
        return $this->voucherType;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucherType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucherType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherTypeForArrayConstraintsFromSetVoucherType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExistingVoucherNumberRequestVoucherTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getExistingVoucherNumberRequestVoucherTypeItem)) {
                $invalidValues[] = is_object($getExistingVoucherNumberRequestVoucherTypeItem) ? get_class($getExistingVoucherNumberRequestVoucherTypeItem) : sprintf('%s(%s)', gettype($getExistingVoucherNumberRequestVoucherTypeItem), var_export($getExistingVoucherNumberRequestVoucherTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The voucherType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set voucherType value
     * @throws InvalidArgumentException
     * @param string[] $voucherType
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setVoucherType(?array $voucherType = null): self
    {
        // validation for constraint: array
        if ('' !== ($voucherTypeArrayErrorMessage = self::validateVoucherTypeForArrayConstraintsFromSetVoucherType($voucherType))) {
            throw new InvalidArgumentException($voucherTypeArrayErrorMessage, __LINE__);
        }
        $this->voucherType = $voucherType;
        
        return $this;
    }
    /**
     * Add item to voucherType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function addToVoucherType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The voucherType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->voucherType[] = $item;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberRequest
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
}
