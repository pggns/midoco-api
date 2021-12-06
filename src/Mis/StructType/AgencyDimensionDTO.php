<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyDimensionDTO StructType
 * @subpackage Structs
 */
class AgencyDimensionDTO extends AbstractStructBase
{
    /**
     * The agCity
     * @var string|null
     */
    protected ?string $agCity = null;
    /**
     * The agCountryCode
     * @var string|null
     */
    protected ?string $agCountryCode = null;
    /**
     * The agEndorsement
     * @var string|null
     */
    protected ?string $agEndorsement = null;
    /**
     * The agOrganisationName
     * @var string|null
     */
    protected ?string $agOrganisationName = null;
    /**
     * The agPhoneticCity
     * @var string|null
     */
    protected ?string $agPhoneticCity = null;
    /**
     * The agPhoneticName
     * @var string|null
     */
    protected ?string $agPhoneticName = null;
    /**
     * The agPhoneticStreet
     * @var string|null
     */
    protected ?string $agPhoneticStreet = null;
    /**
     * The agPostalCode
     * @var string|null
     */
    protected ?string $agPostalCode = null;
    /**
     * The agState
     * @var string|null
     */
    protected ?string $agState = null;
    /**
     * The agStreet
     * @var string|null
     */
    protected ?string $agStreet = null;
    /**
     * The agStreetNo
     * @var string|null
     */
    protected ?string $agStreetNo = null;
    /**
     * The agencyId
     * @var int|null
     */
    protected ?int $agencyId = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The midocoAgencyId
     * @var string|null
     */
    protected ?string $midocoAgencyId = null;
    /**
     * The subAgency
     * @var string|null
     */
    protected ?string $subAgency = null;
    /**
     * Constructor method for AgencyDimensionDTO
     * @uses AgencyDimensionDTO::setAgCity()
     * @uses AgencyDimensionDTO::setAgCountryCode()
     * @uses AgencyDimensionDTO::setAgEndorsement()
     * @uses AgencyDimensionDTO::setAgOrganisationName()
     * @uses AgencyDimensionDTO::setAgPhoneticCity()
     * @uses AgencyDimensionDTO::setAgPhoneticName()
     * @uses AgencyDimensionDTO::setAgPhoneticStreet()
     * @uses AgencyDimensionDTO::setAgPostalCode()
     * @uses AgencyDimensionDTO::setAgState()
     * @uses AgencyDimensionDTO::setAgStreet()
     * @uses AgencyDimensionDTO::setAgStreetNo()
     * @uses AgencyDimensionDTO::setAgencyId()
     * @uses AgencyDimensionDTO::setCooperationId()
     * @uses AgencyDimensionDTO::setMidocoAgencyId()
     * @uses AgencyDimensionDTO::setSubAgency()
     * @param string $agCity
     * @param string $agCountryCode
     * @param string $agEndorsement
     * @param string $agOrganisationName
     * @param string $agPhoneticCity
     * @param string $agPhoneticName
     * @param string $agPhoneticStreet
     * @param string $agPostalCode
     * @param string $agState
     * @param string $agStreet
     * @param string $agStreetNo
     * @param int $agencyId
     * @param string $cooperationId
     * @param string $midocoAgencyId
     * @param string $subAgency
     */
    public function __construct(?string $agCity = null, ?string $agCountryCode = null, ?string $agEndorsement = null, ?string $agOrganisationName = null, ?string $agPhoneticCity = null, ?string $agPhoneticName = null, ?string $agPhoneticStreet = null, ?string $agPostalCode = null, ?string $agState = null, ?string $agStreet = null, ?string $agStreetNo = null, ?int $agencyId = null, ?string $cooperationId = null, ?string $midocoAgencyId = null, ?string $subAgency = null)
    {
        $this
            ->setAgCity($agCity)
            ->setAgCountryCode($agCountryCode)
            ->setAgEndorsement($agEndorsement)
            ->setAgOrganisationName($agOrganisationName)
            ->setAgPhoneticCity($agPhoneticCity)
            ->setAgPhoneticName($agPhoneticName)
            ->setAgPhoneticStreet($agPhoneticStreet)
            ->setAgPostalCode($agPostalCode)
            ->setAgState($agState)
            ->setAgStreet($agStreet)
            ->setAgStreetNo($agStreetNo)
            ->setAgencyId($agencyId)
            ->setCooperationId($cooperationId)
            ->setMidocoAgencyId($midocoAgencyId)
            ->setSubAgency($subAgency);
    }
    /**
     * Get agCity value
     * @return string|null
     */
    public function getAgCity(): ?string
    {
        return $this->agCity;
    }
    /**
     * Set agCity value
     * @param string $agCity
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgCity(?string $agCity = null): self
    {
        // validation for constraint: string
        if (!is_null($agCity) && !is_string($agCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agCity, true), gettype($agCity)), __LINE__);
        }
        $this->agCity = $agCity;
        
        return $this;
    }
    /**
     * Get agCountryCode value
     * @return string|null
     */
    public function getAgCountryCode(): ?string
    {
        return $this->agCountryCode;
    }
    /**
     * Set agCountryCode value
     * @param string $agCountryCode
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgCountryCode(?string $agCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($agCountryCode) && !is_string($agCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agCountryCode, true), gettype($agCountryCode)), __LINE__);
        }
        $this->agCountryCode = $agCountryCode;
        
        return $this;
    }
    /**
     * Get agEndorsement value
     * @return string|null
     */
    public function getAgEndorsement(): ?string
    {
        return $this->agEndorsement;
    }
    /**
     * Set agEndorsement value
     * @param string $agEndorsement
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgEndorsement(?string $agEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($agEndorsement) && !is_string($agEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agEndorsement, true), gettype($agEndorsement)), __LINE__);
        }
        $this->agEndorsement = $agEndorsement;
        
        return $this;
    }
    /**
     * Get agOrganisationName value
     * @return string|null
     */
    public function getAgOrganisationName(): ?string
    {
        return $this->agOrganisationName;
    }
    /**
     * Set agOrganisationName value
     * @param string $agOrganisationName
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgOrganisationName(?string $agOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($agOrganisationName) && !is_string($agOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agOrganisationName, true), gettype($agOrganisationName)), __LINE__);
        }
        $this->agOrganisationName = $agOrganisationName;
        
        return $this;
    }
    /**
     * Get agPhoneticCity value
     * @return string|null
     */
    public function getAgPhoneticCity(): ?string
    {
        return $this->agPhoneticCity;
    }
    /**
     * Set agPhoneticCity value
     * @param string $agPhoneticCity
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgPhoneticCity(?string $agPhoneticCity = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticCity) && !is_string($agPhoneticCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticCity, true), gettype($agPhoneticCity)), __LINE__);
        }
        $this->agPhoneticCity = $agPhoneticCity;
        
        return $this;
    }
    /**
     * Get agPhoneticName value
     * @return string|null
     */
    public function getAgPhoneticName(): ?string
    {
        return $this->agPhoneticName;
    }
    /**
     * Set agPhoneticName value
     * @param string $agPhoneticName
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgPhoneticName(?string $agPhoneticName = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticName) && !is_string($agPhoneticName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticName, true), gettype($agPhoneticName)), __LINE__);
        }
        $this->agPhoneticName = $agPhoneticName;
        
        return $this;
    }
    /**
     * Get agPhoneticStreet value
     * @return string|null
     */
    public function getAgPhoneticStreet(): ?string
    {
        return $this->agPhoneticStreet;
    }
    /**
     * Set agPhoneticStreet value
     * @param string $agPhoneticStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgPhoneticStreet(?string $agPhoneticStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticStreet) && !is_string($agPhoneticStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticStreet, true), gettype($agPhoneticStreet)), __LINE__);
        }
        $this->agPhoneticStreet = $agPhoneticStreet;
        
        return $this;
    }
    /**
     * Get agPostalCode value
     * @return string|null
     */
    public function getAgPostalCode(): ?string
    {
        return $this->agPostalCode;
    }
    /**
     * Set agPostalCode value
     * @param string $agPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgPostalCode(?string $agPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($agPostalCode) && !is_string($agPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPostalCode, true), gettype($agPostalCode)), __LINE__);
        }
        $this->agPostalCode = $agPostalCode;
        
        return $this;
    }
    /**
     * Get agState value
     * @return string|null
     */
    public function getAgState(): ?string
    {
        return $this->agState;
    }
    /**
     * Set agState value
     * @param string $agState
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgState(?string $agState = null): self
    {
        // validation for constraint: string
        if (!is_null($agState) && !is_string($agState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agState, true), gettype($agState)), __LINE__);
        }
        $this->agState = $agState;
        
        return $this;
    }
    /**
     * Get agStreet value
     * @return string|null
     */
    public function getAgStreet(): ?string
    {
        return $this->agStreet;
    }
    /**
     * Set agStreet value
     * @param string $agStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgStreet(?string $agStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($agStreet) && !is_string($agStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agStreet, true), gettype($agStreet)), __LINE__);
        }
        $this->agStreet = $agStreet;
        
        return $this;
    }
    /**
     * Get agStreetNo value
     * @return string|null
     */
    public function getAgStreetNo(): ?string
    {
        return $this->agStreetNo;
    }
    /**
     * Set agStreetNo value
     * @param string $agStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgStreetNo(?string $agStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agStreetNo) && !is_string($agStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agStreetNo, true), gettype($agStreetNo)), __LINE__);
        }
        $this->agStreetNo = $agStreetNo;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return int|null
     */
    public function getAgencyId(): ?int
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param int $agencyId
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setAgencyId(?int $agencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !(is_int($agencyId) || ctype_digit($agencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get midocoAgencyId value
     * @return string|null
     */
    public function getMidocoAgencyId(): ?string
    {
        return $this->midocoAgencyId;
    }
    /**
     * Set midocoAgencyId value
     * @param string $midocoAgencyId
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setMidocoAgencyId(?string $midocoAgencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoAgencyId) && !is_string($midocoAgencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoAgencyId, true), gettype($midocoAgencyId)), __LINE__);
        }
        $this->midocoAgencyId = $midocoAgencyId;
        
        return $this;
    }
    /**
     * Get subAgency value
     * @return string|null
     */
    public function getSubAgency(): ?string
    {
        return $this->subAgency;
    }
    /**
     * Set subAgency value
     * @param string $subAgency
     * @return \Pggns\MidocoApi\Mis\StructType\AgencyDimensionDTO
     */
    public function setSubAgency(?string $subAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($subAgency) && !is_string($subAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAgency, true), gettype($subAgency)), __LINE__);
        }
        $this->subAgency = $subAgency;
        
        return $this;
    }
}
