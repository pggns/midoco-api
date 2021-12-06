<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDbiDefsRequest StructType
 * @subpackage Structs
 */
class DeleteDbiDefsRequest extends AbstractStructBase
{
    /**
     * The ccNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ccNo;
    /**
     * The dbiKey
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dbiKey;
    /**
     * Constructor method for DeleteDbiDefsRequest
     * @uses DeleteDbiDefsRequest::setCcNo()
     * @uses DeleteDbiDefsRequest::setDbiKey()
     * @param string $ccNo
     * @param string $dbiKey
     */
    public function __construct(string $ccNo, string $dbiKey)
    {
        $this
            ->setCcNo($ccNo)
            ->setDbiKey($dbiKey);
    }
    /**
     * Get ccNo value
     * @return string
     */
    public function getCcNo(): string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiDefsRequest
     */
    public function setCcNo(string $ccNo): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get dbiKey value
     * @return string
     */
    public function getDbiKey(): string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiDefsRequest
     */
    public function setDbiKey(string $dbiKey): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
}
