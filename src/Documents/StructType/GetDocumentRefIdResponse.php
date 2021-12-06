<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentRefIdResponse StructType
 * @subpackage Structs
 */
class GetDocumentRefIdResponse extends AbstractStructBase
{
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * Constructor method for GetDocumentRefIdResponse
     * @uses GetDocumentRefIdResponse::setRefId()
     * @param int $refId
     */
    public function __construct(?int $refId = null)
    {
        $this
            ->setRefId($refId);
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdResponse
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
}
