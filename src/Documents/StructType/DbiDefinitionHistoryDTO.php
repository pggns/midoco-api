<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DbiDefinitionHistoryDTO StructType
 * @subpackage Structs
 */
class DbiDefinitionHistoryDTO extends AbstractStructBase
{
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The dbiDefinitionHistoryId
     * @var int|null
     */
    protected ?int $dbiDefinitionHistoryId = null;
    /**
     * The modifyKey
     * @var string|null
     */
    protected ?string $modifyKey = null;
    /**
     * The modifySubKey
     * @var string|null
     */
    protected ?string $modifySubKey = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The modifyValue
     * @var string|null
     */
    protected ?string $modifyValue = null;
    /**
     * The oldValue
     * @var string|null
     */
    protected ?string $oldValue = null;
    /**
     * Constructor method for DbiDefinitionHistoryDTO
     * @uses DbiDefinitionHistoryDTO::setCcNo()
     * @uses DbiDefinitionHistoryDTO::setDbiDefinitionHistoryId()
     * @uses DbiDefinitionHistoryDTO::setModifyKey()
     * @uses DbiDefinitionHistoryDTO::setModifySubKey()
     * @uses DbiDefinitionHistoryDTO::setModifyTimestamp()
     * @uses DbiDefinitionHistoryDTO::setModifyUser()
     * @uses DbiDefinitionHistoryDTO::setModifyValue()
     * @uses DbiDefinitionHistoryDTO::setOldValue()
     * @param string $ccNo
     * @param int $dbiDefinitionHistoryId
     * @param string $modifyKey
     * @param string $modifySubKey
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param string $modifyValue
     * @param string $oldValue
     */
    public function __construct(?string $ccNo = null, ?int $dbiDefinitionHistoryId = null, ?string $modifyKey = null, ?string $modifySubKey = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?string $modifyValue = null, ?string $oldValue = null)
    {
        $this
            ->setCcNo($ccNo)
            ->setDbiDefinitionHistoryId($dbiDefinitionHistoryId)
            ->setModifyKey($modifyKey)
            ->setModifySubKey($modifySubKey)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setModifyValue($modifyValue)
            ->setOldValue($oldValue);
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get dbiDefinitionHistoryId value
     * @return int|null
     */
    public function getDbiDefinitionHistoryId(): ?int
    {
        return $this->dbiDefinitionHistoryId;
    }
    /**
     * Set dbiDefinitionHistoryId value
     * @param int $dbiDefinitionHistoryId
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setDbiDefinitionHistoryId(?int $dbiDefinitionHistoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($dbiDefinitionHistoryId) && !(is_int($dbiDefinitionHistoryId) || ctype_digit($dbiDefinitionHistoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dbiDefinitionHistoryId, true), gettype($dbiDefinitionHistoryId)), __LINE__);
        }
        $this->dbiDefinitionHistoryId = $dbiDefinitionHistoryId;
        
        return $this;
    }
    /**
     * Get modifyKey value
     * @return string|null
     */
    public function getModifyKey(): ?string
    {
        return $this->modifyKey;
    }
    /**
     * Set modifyKey value
     * @param string $modifyKey
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setModifyKey(?string $modifyKey = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyKey) && !is_string($modifyKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyKey, true), gettype($modifyKey)), __LINE__);
        }
        $this->modifyKey = $modifyKey;
        
        return $this;
    }
    /**
     * Get modifySubKey value
     * @return string|null
     */
    public function getModifySubKey(): ?string
    {
        return $this->modifySubKey;
    }
    /**
     * Set modifySubKey value
     * @param string $modifySubKey
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setModifySubKey(?string $modifySubKey = null): self
    {
        // validation for constraint: string
        if (!is_null($modifySubKey) && !is_string($modifySubKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifySubKey, true), gettype($modifySubKey)), __LINE__);
        }
        $this->modifySubKey = $modifySubKey;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get modifyValue value
     * @return string|null
     */
    public function getModifyValue(): ?string
    {
        return $this->modifyValue;
    }
    /**
     * Set modifyValue value
     * @param string $modifyValue
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setModifyValue(?string $modifyValue = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyValue) && !is_string($modifyValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyValue, true), gettype($modifyValue)), __LINE__);
        }
        $this->modifyValue = $modifyValue;
        
        return $this;
    }
    /**
     * Get oldValue value
     * @return string|null
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }
    /**
     * Set oldValue value
     * @param string $oldValue
     * @return \Pggns\MidocoApi\Documents\StructType\DbiDefinitionHistoryDTO
     */
    public function setOldValue(?string $oldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($oldValue) && !is_string($oldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldValue, true), gettype($oldValue)), __LINE__);
        }
        $this->oldValue = $oldValue;
        
        return $this;
    }
}
