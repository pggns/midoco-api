<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveHistoryDocumentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveHistoryDocumentResponse extends AbstractStructBase
{
    /**
     * The refId
     * @var string|null
     */
    protected ?string $refId = null;
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * Constructor method for SaveHistoryDocumentResponse
     * @uses SaveHistoryDocumentResponse::setRefId()
     * @uses SaveHistoryDocumentResponse::setVersionId()
     * @param string $refId
     * @param int $versionId
     */
    public function __construct(?string $refId = null, ?int $versionId = null)
    {
        $this
            ->setRefId($refId)
            ->setVersionId($versionId);
    }
    /**
     * Get refId value
     * @return string|null
     */
    public function getRefId(): ?string
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param string $refId
     * @return \Pggns\MidocoApi\Documents\StructType\SaveHistoryDocumentResponse
     */
    public function setRefId(?string $refId = null): self
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Documents\StructType\SaveHistoryDocumentResponse
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
