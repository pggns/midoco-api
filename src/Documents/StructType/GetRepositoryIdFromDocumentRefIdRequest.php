<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRepositoryIdFromDocumentRefIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRepositoryIdFromDocumentRefIdRequest extends AbstractStructBase
{
    /**
     * The documentRefId
     * @var int|null
     */
    protected ?int $documentRefId = null;
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * Constructor method for GetRepositoryIdFromDocumentRefIdRequest
     * @uses GetRepositoryIdFromDocumentRefIdRequest::setDocumentRefId()
     * @uses GetRepositoryIdFromDocumentRefIdRequest::setContentType()
     * @param int $documentRefId
     * @param string $contentType
     */
    public function __construct(?int $documentRefId = null, ?string $contentType = null)
    {
        $this
            ->setDocumentRefId($documentRefId)
            ->setContentType($contentType);
    }
    /**
     * Get documentRefId value
     * @return int|null
     */
    public function getDocumentRefId(): ?int
    {
        return $this->documentRefId;
    }
    /**
     * Set documentRefId value
     * @param int $documentRefId
     * @return \Pggns\MidocoApi\Documents\StructType\GetRepositoryIdFromDocumentRefIdRequest
     */
    public function setDocumentRefId(?int $documentRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentRefId) && !(is_int($documentRefId) || ctype_digit($documentRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentRefId, true), gettype($documentRefId)), __LINE__);
        }
        $this->documentRefId = $documentRefId;
        
        return $this;
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Documents\StructType\GetRepositoryIdFromDocumentRefIdRequest
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
}
