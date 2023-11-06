<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDiffTransformationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDiffTransformationResponse extends AbstractStructBase
{
    /**
     * The result
     * @var string|null
     */
    protected ?string $result = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * Constructor method for CreateDiffTransformationResponse
     * @uses CreateDiffTransformationResponse::setResult()
     * @uses CreateDiffTransformationResponse::setErrorCode()
     * @uses CreateDiffTransformationResponse::setErrorBundle()
     * @param string $result
     * @param string $errorCode
     * @param string $errorBundle
     */
    public function __construct(?string $result = null, ?string $errorCode = null, ?string $errorBundle = null)
    {
        $this
            ->setResult($result)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle);
    }
    /**
     * Get result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Pggns\MidocoApi\Documents\StructType\CreateDiffTransformationResponse
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Documents\StructType\CreateDiffTransformationResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Documents\StructType\CreateDiffTransformationResponse
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
}
