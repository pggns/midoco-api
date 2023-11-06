<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCCAccessListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCCAccessListType extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The accessTimestamp
     * @var string|null
     */
    protected ?string $accessTimestamp = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * Constructor method for MidocoCCAccessListType
     * @uses MidocoCCAccessListType::setUserId()
     * @uses MidocoCCAccessListType::setAccessTimestamp()
     * @uses MidocoCCAccessListType::setCcNo()
     * @param int $userId
     * @param string $accessTimestamp
     * @param string $ccNo
     */
    public function __construct(?int $userId = null, ?string $accessTimestamp = null, ?string $ccNo = null)
    {
        $this
            ->setUserId($userId)
            ->setAccessTimestamp($accessTimestamp)
            ->setCcNo($ccNo);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get accessTimestamp value
     * @return string|null
     */
    public function getAccessTimestamp(): ?string
    {
        return $this->accessTimestamp;
    }
    /**
     * Set accessTimestamp value
     * @param string $accessTimestamp
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType
     */
    public function setAccessTimestamp(?string $accessTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($accessTimestamp) && !is_string($accessTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessTimestamp, true), gettype($accessTimestamp)), __LINE__);
        }
        $this->accessTimestamp = $accessTimestamp;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType
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
}
