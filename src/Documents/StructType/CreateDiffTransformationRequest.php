<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDiffTransformationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDiffTransformationRequest extends AbstractStructBase
{
    /**
     * The diffDocumentRefId
     * @var int|null
     */
    protected ?int $diffDocumentRefId = null;
    /**
     * The diffAsString
     * @var string|null
     */
    protected ?string $diffAsString = null;
    /**
     * Constructor method for CreateDiffTransformationRequest
     * @uses CreateDiffTransformationRequest::setDiffDocumentRefId()
     * @uses CreateDiffTransformationRequest::setDiffAsString()
     * @param int $diffDocumentRefId
     * @param string $diffAsString
     */
    public function __construct(?int $diffDocumentRefId = null, ?string $diffAsString = null)
    {
        $this
            ->setDiffDocumentRefId($diffDocumentRefId)
            ->setDiffAsString($diffAsString);
    }
    /**
     * Get diffDocumentRefId value
     * @return int|null
     */
    public function getDiffDocumentRefId(): ?int
    {
        return $this->diffDocumentRefId;
    }
    /**
     * Set diffDocumentRefId value
     * @param int $diffDocumentRefId
     * @return \Pggns\MidocoApi\Documents\StructType\CreateDiffTransformationRequest
     */
    public function setDiffDocumentRefId(?int $diffDocumentRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($diffDocumentRefId) && !(is_int($diffDocumentRefId) || ctype_digit($diffDocumentRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($diffDocumentRefId, true), gettype($diffDocumentRefId)), __LINE__);
        }
        $this->diffDocumentRefId = $diffDocumentRefId;
        
        return $this;
    }
    /**
     * Get diffAsString value
     * @return string|null
     */
    public function getDiffAsString(): ?string
    {
        return $this->diffAsString;
    }
    /**
     * Set diffAsString value
     * @param string $diffAsString
     * @return \Pggns\MidocoApi\Documents\StructType\CreateDiffTransformationRequest
     */
    public function setDiffAsString(?string $diffAsString = null): self
    {
        // validation for constraint: string
        if (!is_null($diffAsString) && !is_string($diffAsString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diffAsString, true), gettype($diffAsString)), __LINE__);
        }
        $this->diffAsString = $diffAsString;
        
        return $this;
    }
}
