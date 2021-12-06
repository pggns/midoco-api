<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmPersTravPhonDTO StructType
 * @subpackage Structs
 */
class CrmPersTravPhonDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The exactForename
     * @var string|null
     */
    protected ?string $exactForename = null;
    /**
     * The exactMiddleName
     * @var string|null
     */
    protected ?string $exactMiddleName = null;
    /**
     * The exactName
     * @var string|null
     */
    protected ?string $exactName = null;
    /**
     * The exactNamePrefix
     * @var string|null
     */
    protected ?string $exactNamePrefix = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * Constructor method for CrmPersTravPhonDTO
     * @uses CrmPersTravPhonDTO::setCustomerId()
     * @uses CrmPersTravPhonDTO::setExactForename()
     * @uses CrmPersTravPhonDTO::setExactMiddleName()
     * @uses CrmPersTravPhonDTO::setExactName()
     * @uses CrmPersTravPhonDTO::setExactNamePrefix()
     * @uses CrmPersTravPhonDTO::setForename()
     * @uses CrmPersTravPhonDTO::setMiddleName()
     * @uses CrmPersTravPhonDTO::setName()
     * @uses CrmPersTravPhonDTO::setTravellerId()
     * @param int $customerId
     * @param string $exactForename
     * @param string $exactMiddleName
     * @param string $exactName
     * @param string $exactNamePrefix
     * @param string $forename
     * @param string $middleName
     * @param string $name
     * @param int $travellerId
     */
    public function __construct(?int $customerId = null, ?string $exactForename = null, ?string $exactMiddleName = null, ?string $exactName = null, ?string $exactNamePrefix = null, ?string $forename = null, ?string $middleName = null, ?string $name = null, ?int $travellerId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setExactForename($exactForename)
            ->setExactMiddleName($exactMiddleName)
            ->setExactName($exactName)
            ->setExactNamePrefix($exactNamePrefix)
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setName($name)
            ->setTravellerId($travellerId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get exactForename value
     * @return string|null
     */
    public function getExactForename(): ?string
    {
        return $this->exactForename;
    }
    /**
     * Set exactForename value
     * @param string $exactForename
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setExactForename(?string $exactForename = null): self
    {
        // validation for constraint: string
        if (!is_null($exactForename) && !is_string($exactForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactForename, true), gettype($exactForename)), __LINE__);
        }
        $this->exactForename = $exactForename;
        
        return $this;
    }
    /**
     * Get exactMiddleName value
     * @return string|null
     */
    public function getExactMiddleName(): ?string
    {
        return $this->exactMiddleName;
    }
    /**
     * Set exactMiddleName value
     * @param string $exactMiddleName
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setExactMiddleName(?string $exactMiddleName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactMiddleName) && !is_string($exactMiddleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactMiddleName, true), gettype($exactMiddleName)), __LINE__);
        }
        $this->exactMiddleName = $exactMiddleName;
        
        return $this;
    }
    /**
     * Get exactName value
     * @return string|null
     */
    public function getExactName(): ?string
    {
        return $this->exactName;
    }
    /**
     * Set exactName value
     * @param string $exactName
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setExactName(?string $exactName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactName) && !is_string($exactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactName, true), gettype($exactName)), __LINE__);
        }
        $this->exactName = $exactName;
        
        return $this;
    }
    /**
     * Get exactNamePrefix value
     * @return string|null
     */
    public function getExactNamePrefix(): ?string
    {
        return $this->exactNamePrefix;
    }
    /**
     * Set exactNamePrefix value
     * @param string $exactNamePrefix
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setExactNamePrefix(?string $exactNamePrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($exactNamePrefix) && !is_string($exactNamePrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactNamePrefix, true), gettype($exactNamePrefix)), __LINE__);
        }
        $this->exactNamePrefix = $exactNamePrefix;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmPersTravPhonDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
}
