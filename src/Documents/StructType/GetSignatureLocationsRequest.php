<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSignatureLocationsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSignatureLocationsRequest extends AbstractStructBase
{
    /**
     * The signatureDocId
     * @var int|null
     */
    protected ?int $signatureDocId = null;
    /**
     * Constructor method for GetSignatureLocationsRequest
     * @uses GetSignatureLocationsRequest::setSignatureDocId()
     * @param int $signatureDocId
     */
    public function __construct(?int $signatureDocId = null)
    {
        $this
            ->setSignatureDocId($signatureDocId);
    }
    /**
     * Get signatureDocId value
     * @return int|null
     */
    public function getSignatureDocId(): ?int
    {
        return $this->signatureDocId;
    }
    /**
     * Set signatureDocId value
     * @param int $signatureDocId
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsRequest
     */
    public function setSignatureDocId(?int $signatureDocId = null): self
    {
        // validation for constraint: int
        if (!is_null($signatureDocId) && !(is_int($signatureDocId) || ctype_digit($signatureDocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signatureDocId, true), gettype($signatureDocId)), __LINE__);
        }
        $this->signatureDocId = $signatureDocId;
        
        return $this;
    }
}
