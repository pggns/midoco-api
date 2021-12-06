<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitCardRequest StructType
 * @subpackage Structs
 */
class SaveDebitCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The useValidation
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $useValidation = null;
    /**
     * Constructor method for SaveDebitCardRequest
     * @uses SaveDebitCardRequest::setMidocoCrmDebitCard()
     * @uses SaveDebitCardRequest::setInternalVersion()
     * @uses SaveDebitCardRequest::setUseValidation()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param int $internalVersion
     * @param bool $useValidation
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?int $internalVersion = null, ?bool $useValidation = true)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setInternalVersion($internalVersion)
            ->setUseValidation($useValidation);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveDebitCardRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
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
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveDebitCardRequest
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
    /**
     * Get useValidation value
     * @return bool|null
     */
    public function getUseValidation(): ?bool
    {
        return $this->useValidation;
    }
    /**
     * Set useValidation value
     * @param bool $useValidation
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveDebitCardRequest
     */
    public function setUseValidation(?bool $useValidation = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useValidation) && !is_bool($useValidation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useValidation, true), gettype($useValidation)), __LINE__);
        }
        $this->useValidation = $useValidation;
        
        return $this;
    }
}
