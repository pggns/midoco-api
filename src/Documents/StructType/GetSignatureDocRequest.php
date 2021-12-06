<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSignatureDocRequest StructType
 * @subpackage Structs
 */
class GetSignatureDocRequest extends AbstractStructBase
{
    /**
     * The signatureDocId
     * @var int|null
     */
    protected ?int $signatureDocId = null;
    /**
     * The forView
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $forView = null;
    /**
     * Constructor method for GetSignatureDocRequest
     * @uses GetSignatureDocRequest::setSignatureDocId()
     * @uses GetSignatureDocRequest::setForView()
     * @param int $signatureDocId
     * @param bool $forView
     */
    public function __construct(?int $signatureDocId = null, ?bool $forView = false)
    {
        $this
            ->setSignatureDocId($signatureDocId)
            ->setForView($forView);
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureDocRequest
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
    /**
     * Get forView value
     * @return bool|null
     */
    public function getForView(): ?bool
    {
        return $this->forView;
    }
    /**
     * Set forView value
     * @param bool $forView
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureDocRequest
     */
    public function setForView(?bool $forView = false): self
    {
        // validation for constraint: boolean
        if (!is_null($forView) && !is_bool($forView)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forView, true), gettype($forView)), __LINE__);
        }
        $this->forView = $forView;
        
        return $this;
    }
}
