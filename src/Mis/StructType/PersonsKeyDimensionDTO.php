<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonsKeyDimensionDTO StructType
 * @subpackage Structs
 */
class PersonsKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The personsKey
     * @var string|null
     */
    protected ?string $personsKey = null;
    /**
     * The personsKeyDescription
     * @var string|null
     */
    protected ?string $personsKeyDescription = null;
    /**
     * The personsKeyId
     * @var int|null
     */
    protected ?int $personsKeyId = null;
    /**
     * The personsKeyLocDescr
     * @var string|null
     */
    protected ?string $personsKeyLocDescr = null;
    /**
     * Constructor method for PersonsKeyDimensionDTO
     * @uses PersonsKeyDimensionDTO::setPersonsKey()
     * @uses PersonsKeyDimensionDTO::setPersonsKeyDescription()
     * @uses PersonsKeyDimensionDTO::setPersonsKeyId()
     * @uses PersonsKeyDimensionDTO::setPersonsKeyLocDescr()
     * @param string $personsKey
     * @param string $personsKeyDescription
     * @param int $personsKeyId
     * @param string $personsKeyLocDescr
     */
    public function __construct(?string $personsKey = null, ?string $personsKeyDescription = null, ?int $personsKeyId = null, ?string $personsKeyLocDescr = null)
    {
        $this
            ->setPersonsKey($personsKey)
            ->setPersonsKeyDescription($personsKeyDescription)
            ->setPersonsKeyId($personsKeyId)
            ->setPersonsKeyLocDescr($personsKeyLocDescr);
    }
    /**
     * Get personsKey value
     * @return string|null
     */
    public function getPersonsKey(): ?string
    {
        return $this->personsKey;
    }
    /**
     * Set personsKey value
     * @param string $personsKey
     * @return \Pggns\MidocoApi\Mis\StructType\PersonsKeyDimensionDTO
     */
    public function setPersonsKey(?string $personsKey = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKey) && !is_string($personsKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKey, true), gettype($personsKey)), __LINE__);
        }
        $this->personsKey = $personsKey;
        
        return $this;
    }
    /**
     * Get personsKeyDescription value
     * @return string|null
     */
    public function getPersonsKeyDescription(): ?string
    {
        return $this->personsKeyDescription;
    }
    /**
     * Set personsKeyDescription value
     * @param string $personsKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\PersonsKeyDimensionDTO
     */
    public function setPersonsKeyDescription(?string $personsKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKeyDescription) && !is_string($personsKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKeyDescription, true), gettype($personsKeyDescription)), __LINE__);
        }
        $this->personsKeyDescription = $personsKeyDescription;
        
        return $this;
    }
    /**
     * Get personsKeyId value
     * @return int|null
     */
    public function getPersonsKeyId(): ?int
    {
        return $this->personsKeyId;
    }
    /**
     * Set personsKeyId value
     * @param int $personsKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\PersonsKeyDimensionDTO
     */
    public function setPersonsKeyId(?int $personsKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($personsKeyId) && !(is_int($personsKeyId) || ctype_digit($personsKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsKeyId, true), gettype($personsKeyId)), __LINE__);
        }
        $this->personsKeyId = $personsKeyId;
        
        return $this;
    }
    /**
     * Get personsKeyLocDescr value
     * @return string|null
     */
    public function getPersonsKeyLocDescr(): ?string
    {
        return $this->personsKeyLocDescr;
    }
    /**
     * Set personsKeyLocDescr value
     * @param string $personsKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\PersonsKeyDimensionDTO
     */
    public function setPersonsKeyLocDescr(?string $personsKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKeyLocDescr) && !is_string($personsKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKeyLocDescr, true), gettype($personsKeyLocDescr)), __LINE__);
        }
        $this->personsKeyLocDescr = $personsKeyLocDescr;
        
        return $this;
    }
}
