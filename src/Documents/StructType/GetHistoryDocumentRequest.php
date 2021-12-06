<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistoryDocumentRequest StructType
 * @subpackage Structs
 */
class GetHistoryDocumentRequest extends AbstractStructBase
{
    /**
     * The historyRefId
     * @var string|null
     */
    protected ?string $historyRefId = null;
    /**
     * The unit
     * @var string|null
     */
    protected ?string $unit = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The subtype
     * @var string|null
     */
    protected ?string $subtype = null;
    /**
     * Constructor method for GetHistoryDocumentRequest
     * @uses GetHistoryDocumentRequest::setHistoryRefId()
     * @uses GetHistoryDocumentRequest::setUnit()
     * @uses GetHistoryDocumentRequest::setType()
     * @uses GetHistoryDocumentRequest::setSubtype()
     * @param string $historyRefId
     * @param string $unit
     * @param string $type
     * @param string $subtype
     */
    public function __construct(?string $historyRefId = null, ?string $unit = null, ?string $type = null, ?string $subtype = null)
    {
        $this
            ->setHistoryRefId($historyRefId)
            ->setUnit($unit)
            ->setType($type)
            ->setSubtype($subtype);
    }
    /**
     * Get historyRefId value
     * @return string|null
     */
    public function getHistoryRefId(): ?string
    {
        return $this->historyRefId;
    }
    /**
     * Set historyRefId value
     * @param string $historyRefId
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest
     */
    public function setHistoryRefId(?string $historyRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($historyRefId) && !is_string($historyRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($historyRefId, true), gettype($historyRefId)), __LINE__);
        }
        $this->historyRefId = $historyRefId;
        
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get subtype value
     * @return string|null
     */
    public function getSubtype(): ?string
    {
        return $this->subtype;
    }
    /**
     * Set subtype value
     * @param string $subtype
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest
     */
    public function setSubtype(?string $subtype = null): self
    {
        // validation for constraint: string
        if (!is_null($subtype) && !is_string($subtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subtype, true), gettype($subtype)), __LINE__);
        }
        $this->subtype = $subtype;
        
        return $this;
    }
}
