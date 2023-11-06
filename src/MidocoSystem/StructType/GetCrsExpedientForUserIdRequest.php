<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrsExpedientForUserIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrsExpedientForUserIdRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The crsName
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * Constructor method for GetCrsExpedientForUserIdRequest
     * @uses GetCrsExpedientForUserIdRequest::setUserId()
     * @uses GetCrsExpedientForUserIdRequest::setCrsName()
     * @param int $userId
     * @param string $crsName
     */
    public function __construct(?int $userId = null, ?string $crsName = null)
    {
        $this
            ->setUserId($userId)
            ->setCrsName($crsName);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetCrsExpedientForUserIdRequest
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
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetCrsExpedientForUserIdRequest
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
        return $this;
    }
}
