<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAsyncDiffsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAsyncDiffsRequest extends AbstractStructBase
{
    /**
     * The refId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $refId;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $unitName;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * The subType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $subType;
    /**
     * Constructor method for CreateAsyncDiffsRequest
     * @uses CreateAsyncDiffsRequest::setRefId()
     * @uses CreateAsyncDiffsRequest::setUnitName()
     * @uses CreateAsyncDiffsRequest::setType()
     * @uses CreateAsyncDiffsRequest::setSubType()
     * @param string $refId
     * @param string $unitName
     * @param string $type
     * @param string $subType
     */
    public function __construct(string $refId, string $unitName, string $type, string $subType)
    {
        $this
            ->setRefId($refId)
            ->setUnitName($unitName)
            ->setType($type)
            ->setSubType($subType);
    }
    /**
     * Get refId value
     * @return string
     */
    public function getRefId(): string
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param string $refId
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsRequest
     */
    public function setRefId(string $refId): self
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsRequest
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsRequest
     */
    public function setSubType(string $subType): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
}
