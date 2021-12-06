<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBookingJournalRequest StructType
 * @subpackage Structs
 */
class SaveBookingJournalRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingJournal
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingJournal
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $MidocoBookingJournal = null;
    /**
     * The useOnlyOrgUnitCurrency
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useOnlyOrgUnitCurrency = null;
    /**
     * Constructor method for SaveBookingJournalRequest
     * @uses SaveBookingJournalRequest::setMidocoBookingJournal()
     * @uses SaveBookingJournalRequest::setUseOnlyOrgUnitCurrency()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $midocoBookingJournal
     * @param bool $useOnlyOrgUnitCurrency
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $midocoBookingJournal = null, ?bool $useOnlyOrgUnitCurrency = false)
    {
        $this
            ->setMidocoBookingJournal($midocoBookingJournal)
            ->setUseOnlyOrgUnitCurrency($useOnlyOrgUnitCurrency);
    }
    /**
     * Get MidocoBookingJournal value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal|null
     */
    public function getMidocoBookingJournal(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal
    {
        return $this->MidocoBookingJournal;
    }
    /**
     * Set MidocoBookingJournal value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $midocoBookingJournal
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalRequest
     */
    public function setMidocoBookingJournal(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $midocoBookingJournal = null): self
    {
        $this->MidocoBookingJournal = $midocoBookingJournal;
        
        return $this;
    }
    /**
     * Get useOnlyOrgUnitCurrency value
     * @return bool|null
     */
    public function getUseOnlyOrgUnitCurrency(): ?bool
    {
        return $this->useOnlyOrgUnitCurrency;
    }
    /**
     * Set useOnlyOrgUnitCurrency value
     * @param bool $useOnlyOrgUnitCurrency
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalRequest
     */
    public function setUseOnlyOrgUnitCurrency(?bool $useOnlyOrgUnitCurrency = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useOnlyOrgUnitCurrency) && !is_bool($useOnlyOrgUnitCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useOnlyOrgUnitCurrency, true), gettype($useOnlyOrgUnitCurrency)), __LINE__);
        }
        $this->useOnlyOrgUnitCurrency = $useOnlyOrgUnitCurrency;
        
        return $this;
    }
}
