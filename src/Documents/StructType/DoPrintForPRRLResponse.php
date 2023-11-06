<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoPrintForPRRLResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoPrintForPRRLResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The printjobId
     * @var int|null
     */
    protected ?int $printjobId = null;
    /**
     * The signatureDocId
     * @var int|null
     */
    protected ?int $signatureDocId = null;
    /**
     * Constructor method for DoPrintForPRRLResponse
     * @uses DoPrintForPRRLResponse::setMidocoMailMessage()
     * @uses DoPrintForPRRLResponse::setPrintjobId()
     * @uses DoPrintForPRRLResponse::setSignatureDocId()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     * @param int $printjobId
     * @param int $signatureDocId
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null, ?int $printjobId = null, ?int $signatureDocId = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage)
            ->setPrintjobId($printjobId)
            ->setSignatureDocId($signatureDocId);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get printjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->printjobId;
    }
    /**
     * Set printjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLResponse
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
