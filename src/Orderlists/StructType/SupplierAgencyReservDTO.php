<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierAgencyReservDTO StructType
 * @subpackage Structs
 */
class SupplierAgencyReservDTO extends AbstractStructBase
{
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The sourceAgency
     * @var string|null
     */
    protected ?string $sourceAgency = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The usedAgency
     * @var string|null
     */
    protected ?string $usedAgency = null;
    /**
     * Constructor method for SupplierAgencyReservDTO
     * @uses SupplierAgencyReservDTO::setEndTravel()
     * @uses SupplierAgencyReservDTO::setSourceAgency()
     * @uses SupplierAgencyReservDTO::setStartTravel()
     * @uses SupplierAgencyReservDTO::setSupplierId()
     * @uses SupplierAgencyReservDTO::setTraveltype()
     * @uses SupplierAgencyReservDTO::setUsedAgency()
     * @param string $endTravel
     * @param string $sourceAgency
     * @param string $startTravel
     * @param string $supplierId
     * @param string $traveltype
     * @param string $usedAgency
     */
    public function __construct(?string $endTravel = null, ?string $sourceAgency = null, ?string $startTravel = null, ?string $supplierId = null, ?string $traveltype = null, ?string $usedAgency = null)
    {
        $this
            ->setEndTravel($endTravel)
            ->setSourceAgency($sourceAgency)
            ->setStartTravel($startTravel)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setUsedAgency($usedAgency);
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get sourceAgency value
     * @return string|null
     */
    public function getSourceAgency(): ?string
    {
        return $this->sourceAgency;
    }
    /**
     * Set sourceAgency value
     * @param string $sourceAgency
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setSourceAgency(?string $sourceAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceAgency) && !is_string($sourceAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceAgency, true), gettype($sourceAgency)), __LINE__);
        }
        $this->sourceAgency = $sourceAgency;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get usedAgency value
     * @return string|null
     */
    public function getUsedAgency(): ?string
    {
        return $this->usedAgency;
    }
    /**
     * Set usedAgency value
     * @param string $usedAgency
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAgencyReservDTO
     */
    public function setUsedAgency(?string $usedAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($usedAgency) && !is_string($usedAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedAgency, true), gettype($usedAgency)), __LINE__);
        }
        $this->usedAgency = $usedAgency;
        
        return $this;
    }
}
