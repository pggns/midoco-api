<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginExtListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMarginExtListCriteriaType extends MidocoMarginListCriteriaType
{
    /**
     * The authorizedAtStart
     * @var string|null
     */
    protected ?string $authorizedAtStart = null;
    /**
     * The authorizedAtEnd
     * @var string|null
     */
    protected ?string $authorizedAtEnd = null;
    /**
     * The authorizeComent
     * @var string|null
     */
    protected ?string $authorizeComent = null;
    /**
     * The authorizedById
     * @var int|null
     */
    protected ?int $authorizedById = null;
    /**
     * The smallerMarginAllowed
     * @var bool|null
     */
    protected ?bool $smallerMarginAllowed = null;
    /**
     * Constructor method for MidocoMarginExtListCriteriaType
     * @uses MidocoMarginExtListCriteriaType::setAuthorizedAtStart()
     * @uses MidocoMarginExtListCriteriaType::setAuthorizedAtEnd()
     * @uses MidocoMarginExtListCriteriaType::setAuthorizeComent()
     * @uses MidocoMarginExtListCriteriaType::setAuthorizedById()
     * @uses MidocoMarginExtListCriteriaType::setSmallerMarginAllowed()
     * @param string $authorizedAtStart
     * @param string $authorizedAtEnd
     * @param string $authorizeComent
     * @param int $authorizedById
     * @param bool $smallerMarginAllowed
     */
    public function __construct(?string $authorizedAtStart = null, ?string $authorizedAtEnd = null, ?string $authorizeComent = null, ?int $authorizedById = null, ?bool $smallerMarginAllowed = null)
    {
        $this
            ->setAuthorizedAtStart($authorizedAtStart)
            ->setAuthorizedAtEnd($authorizedAtEnd)
            ->setAuthorizeComent($authorizeComent)
            ->setAuthorizedById($authorizedById)
            ->setSmallerMarginAllowed($smallerMarginAllowed);
    }
    /**
     * Get authorizedAtStart value
     * @return string|null
     */
    public function getAuthorizedAtStart(): ?string
    {
        return $this->authorizedAtStart;
    }
    /**
     * Set authorizedAtStart value
     * @param string $authorizedAtStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
     */
    public function setAuthorizedAtStart(?string $authorizedAtStart = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedAtStart) && !is_string($authorizedAtStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedAtStart, true), gettype($authorizedAtStart)), __LINE__);
        }
        $this->authorizedAtStart = $authorizedAtStart;
        
        return $this;
    }
    /**
     * Get authorizedAtEnd value
     * @return string|null
     */
    public function getAuthorizedAtEnd(): ?string
    {
        return $this->authorizedAtEnd;
    }
    /**
     * Set authorizedAtEnd value
     * @param string $authorizedAtEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
     */
    public function setAuthorizedAtEnd(?string $authorizedAtEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedAtEnd) && !is_string($authorizedAtEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedAtEnd, true), gettype($authorizedAtEnd)), __LINE__);
        }
        $this->authorizedAtEnd = $authorizedAtEnd;
        
        return $this;
    }
    /**
     * Get authorizeComent value
     * @return string|null
     */
    public function getAuthorizeComent(): ?string
    {
        return $this->authorizeComent;
    }
    /**
     * Set authorizeComent value
     * @param string $authorizeComent
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
     */
    public function setAuthorizeComent(?string $authorizeComent = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizeComent) && !is_string($authorizeComent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizeComent, true), gettype($authorizeComent)), __LINE__);
        }
        $this->authorizeComent = $authorizeComent;
        
        return $this;
    }
    /**
     * Get authorizedById value
     * @return int|null
     */
    public function getAuthorizedById(): ?int
    {
        return $this->authorizedById;
    }
    /**
     * Set authorizedById value
     * @param int $authorizedById
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
     */
    public function setAuthorizedById(?int $authorizedById = null): self
    {
        // validation for constraint: int
        if (!is_null($authorizedById) && !(is_int($authorizedById) || ctype_digit($authorizedById))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($authorizedById, true), gettype($authorizedById)), __LINE__);
        }
        $this->authorizedById = $authorizedById;
        
        return $this;
    }
    /**
     * Get smallerMarginAllowed value
     * @return bool|null
     */
    public function getSmallerMarginAllowed(): ?bool
    {
        return $this->smallerMarginAllowed;
    }
    /**
     * Set smallerMarginAllowed value
     * @param bool $smallerMarginAllowed
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListCriteriaType
     */
    public function setSmallerMarginAllowed(?bool $smallerMarginAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($smallerMarginAllowed) && !is_bool($smallerMarginAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smallerMarginAllowed, true), gettype($smallerMarginAllowed)), __LINE__);
        }
        $this->smallerMarginAllowed = $smallerMarginAllowed;
        
        return $this;
    }
}
