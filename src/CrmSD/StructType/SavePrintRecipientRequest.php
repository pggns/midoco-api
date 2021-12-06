<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrintRecipientRequest StructType
 * @subpackage Structs
 */
class SavePrintRecipientRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintRecipient
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintRecipient
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $MidocoPrintRecipient = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SavePrintRecipientRequest
     * @uses SavePrintRecipientRequest::setMidocoPrintRecipient()
     * @uses SavePrintRecipientRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $midocoPrintRecipient
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $midocoPrintRecipient = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoPrintRecipient($midocoPrintRecipient)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoPrintRecipient value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient|null
     */
    public function getMidocoPrintRecipient(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient
    {
        return $this->MidocoPrintRecipient;
    }
    /**
     * Set MidocoPrintRecipient value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $midocoPrintRecipient
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePrintRecipientRequest
     */
    public function setMidocoPrintRecipient(?\Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $midocoPrintRecipient = null): self
    {
        $this->MidocoPrintRecipient = $midocoPrintRecipient;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePrintRecipientRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
