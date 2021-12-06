<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSignatureDoc StructType
 * @subpackage Structs
 */
class MidocoSignatureDoc extends SignatureDocDTO
{
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The refNo
     * @var int|null
     */
    protected ?int $refNo = null;
    /**
     * Constructor method for MidocoSignatureDoc
     * @uses MidocoSignatureDoc::setUserName()
     * @uses MidocoSignatureDoc::setRefNo()
     * @param string $userName
     * @param int $refNo
     */
    public function __construct(?string $userName = null, ?int $refNo = null)
    {
        $this
            ->setUserName($userName)
            ->setRefNo($refNo);
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get refNo value
     * @return int|null
     */
    public function getRefNo(): ?int
    {
        return $this->refNo;
    }
    /**
     * Set refNo value
     * @param int $refNo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc
     */
    public function setRefNo(?int $refNo = null): self
    {
        // validation for constraint: int
        if (!is_null($refNo) && !(is_int($refNo) || ctype_digit($refNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refNo, true), gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;
        
        return $this;
    }
}
