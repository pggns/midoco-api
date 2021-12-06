<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckDtdAnswerDTO StructType
 * @subpackage Structs
 */
class CheckDtdAnswerDTO extends AbstractStructBase
{
    /**
     * The answerText
     * @var string|null
     */
    protected ?string $answerText = null;
    /**
     * The dbId
     * @var int|null
     */
    protected ?int $dbId = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The requiresAmount
     * @var bool|null
     */
    protected ?bool $requiresAmount = null;
    /**
     * The validForSupplier
     * @var string|null
     */
    protected ?string $validForSupplier = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for CheckDtdAnswerDTO
     * @uses CheckDtdAnswerDTO::setAnswerText()
     * @uses CheckDtdAnswerDTO::setDbId()
     * @uses CheckDtdAnswerDTO::setId()
     * @uses CheckDtdAnswerDTO::setPosition()
     * @uses CheckDtdAnswerDTO::setRequiresAmount()
     * @uses CheckDtdAnswerDTO::setValidForSupplier()
     * @uses CheckDtdAnswerDTO::setValidFrom()
     * @uses CheckDtdAnswerDTO::setValidTo()
     * @param string $answerText
     * @param int $dbId
     * @param int $id
     * @param int $position
     * @param bool $requiresAmount
     * @param string $validForSupplier
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $answerText = null, ?int $dbId = null, ?int $id = null, ?int $position = null, ?bool $requiresAmount = null, ?string $validForSupplier = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAnswerText($answerText)
            ->setDbId($dbId)
            ->setId($id)
            ->setPosition($position)
            ->setRequiresAmount($requiresAmount)
            ->setValidForSupplier($validForSupplier)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get answerText value
     * @return string|null
     */
    public function getAnswerText(): ?string
    {
        return $this->answerText;
    }
    /**
     * Set answerText value
     * @param string $answerText
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setAnswerText(?string $answerText = null): self
    {
        // validation for constraint: string
        if (!is_null($answerText) && !is_string($answerText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerText, true), gettype($answerText)), __LINE__);
        }
        $this->answerText = $answerText;
        
        return $this;
    }
    /**
     * Get dbId value
     * @return int|null
     */
    public function getDbId(): ?int
    {
        return $this->dbId;
    }
    /**
     * Set dbId value
     * @param int $dbId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setDbId(?int $dbId = null): self
    {
        // validation for constraint: int
        if (!is_null($dbId) && !(is_int($dbId) || ctype_digit($dbId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbId, true), gettype($dbId)), __LINE__);
        }
        $this->dbId = $dbId;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get requiresAmount value
     * @return bool|null
     */
    public function getRequiresAmount(): ?bool
    {
        return $this->requiresAmount;
    }
    /**
     * Set requiresAmount value
     * @param bool $requiresAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setRequiresAmount(?bool $requiresAmount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresAmount) && !is_bool($requiresAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresAmount, true), gettype($requiresAmount)), __LINE__);
        }
        $this->requiresAmount = $requiresAmount;
        
        return $this;
    }
    /**
     * Get validForSupplier value
     * @return string|null
     */
    public function getValidForSupplier(): ?string
    {
        return $this->validForSupplier;
    }
    /**
     * Set validForSupplier value
     * @param string $validForSupplier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setValidForSupplier(?string $validForSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($validForSupplier) && !is_string($validForSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validForSupplier, true), gettype($validForSupplier)), __LINE__);
        }
        $this->validForSupplier = $validForSupplier;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\CheckDtdAnswerDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
