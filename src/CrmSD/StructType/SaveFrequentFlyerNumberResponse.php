<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFrequentFlyerNumberResponse StructType
 * @subpackage Structs
 */
class SaveFrequentFlyerNumberResponse extends AbstractStructBase
{
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO $MidocoFrequentFlyerNumber = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveFrequentFlyerNumberResponse
     * @uses SaveFrequentFlyerNumberResponse::setMidocoFrequentFlyerNumber()
     * @uses SaveFrequentFlyerNumberResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO|null
     */
    public function getMidocoFrequentFlyerNumber(): ?\Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @param \Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveFrequentFlyerNumberResponse
     */
    public function setMidocoFrequentFlyerNumber(?\Pggns\MidocoApi\CrmSD\StructType\FrequentFlyerNumberDTO $midocoFrequentFlyerNumber = null): self
    {
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveFrequentFlyerNumberResponse
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
