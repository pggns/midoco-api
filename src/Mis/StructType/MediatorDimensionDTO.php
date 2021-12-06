<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorDimensionDTO StructType
 * @subpackage Structs
 */
class MediatorDimensionDTO extends AbstractStructBase
{
    /**
     * The medCity
     * @var string|null
     */
    protected ?string $medCity = null;
    /**
     * The medCountryCode
     * @var string|null
     */
    protected ?string $medCountryCode = null;
    /**
     * The medEndorsement
     * @var string|null
     */
    protected ?string $medEndorsement = null;
    /**
     * The medOrganisationName
     * @var string|null
     */
    protected ?string $medOrganisationName = null;
    /**
     * The medPhoneticCity
     * @var string|null
     */
    protected ?string $medPhoneticCity = null;
    /**
     * The medPhoneticName
     * @var string|null
     */
    protected ?string $medPhoneticName = null;
    /**
     * The medPhoneticStreet
     * @var string|null
     */
    protected ?string $medPhoneticStreet = null;
    /**
     * The medPostalCode
     * @var string|null
     */
    protected ?string $medPostalCode = null;
    /**
     * The medState
     * @var string|null
     */
    protected ?string $medState = null;
    /**
     * The medStreet
     * @var string|null
     */
    protected ?string $medStreet = null;
    /**
     * The medStreetNo
     * @var string|null
     */
    protected ?string $medStreetNo = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorId
     * @var int|null
     */
    protected ?int $mediatorId = null;
    /**
     * The mediatorPortal
     * @var string|null
     */
    protected ?string $mediatorPortal = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The midocoMediatorId
     * @var string|null
     */
    protected ?string $midocoMediatorId = null;
    /**
     * Constructor method for MediatorDimensionDTO
     * @uses MediatorDimensionDTO::setMedCity()
     * @uses MediatorDimensionDTO::setMedCountryCode()
     * @uses MediatorDimensionDTO::setMedEndorsement()
     * @uses MediatorDimensionDTO::setMedOrganisationName()
     * @uses MediatorDimensionDTO::setMedPhoneticCity()
     * @uses MediatorDimensionDTO::setMedPhoneticName()
     * @uses MediatorDimensionDTO::setMedPhoneticStreet()
     * @uses MediatorDimensionDTO::setMedPostalCode()
     * @uses MediatorDimensionDTO::setMedState()
     * @uses MediatorDimensionDTO::setMedStreet()
     * @uses MediatorDimensionDTO::setMedStreetNo()
     * @uses MediatorDimensionDTO::setMediatorAffiliate()
     * @uses MediatorDimensionDTO::setMediatorId()
     * @uses MediatorDimensionDTO::setMediatorPortal()
     * @uses MediatorDimensionDTO::setMediatorType()
     * @uses MediatorDimensionDTO::setMidocoMediatorId()
     * @param string $medCity
     * @param string $medCountryCode
     * @param string $medEndorsement
     * @param string $medOrganisationName
     * @param string $medPhoneticCity
     * @param string $medPhoneticName
     * @param string $medPhoneticStreet
     * @param string $medPostalCode
     * @param string $medState
     * @param string $medStreet
     * @param string $medStreetNo
     * @param string $mediatorAffiliate
     * @param int $mediatorId
     * @param string $mediatorPortal
     * @param string $mediatorType
     * @param string $midocoMediatorId
     */
    public function __construct(?string $medCity = null, ?string $medCountryCode = null, ?string $medEndorsement = null, ?string $medOrganisationName = null, ?string $medPhoneticCity = null, ?string $medPhoneticName = null, ?string $medPhoneticStreet = null, ?string $medPostalCode = null, ?string $medState = null, ?string $medStreet = null, ?string $medStreetNo = null, ?string $mediatorAffiliate = null, ?int $mediatorId = null, ?string $mediatorPortal = null, ?string $mediatorType = null, ?string $midocoMediatorId = null)
    {
        $this
            ->setMedCity($medCity)
            ->setMedCountryCode($medCountryCode)
            ->setMedEndorsement($medEndorsement)
            ->setMedOrganisationName($medOrganisationName)
            ->setMedPhoneticCity($medPhoneticCity)
            ->setMedPhoneticName($medPhoneticName)
            ->setMedPhoneticStreet($medPhoneticStreet)
            ->setMedPostalCode($medPostalCode)
            ->setMedState($medState)
            ->setMedStreet($medStreet)
            ->setMedStreetNo($medStreetNo)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setMediatorPortal($mediatorPortal)
            ->setMediatorType($mediatorType)
            ->setMidocoMediatorId($midocoMediatorId);
    }
    /**
     * Get medCity value
     * @return string|null
     */
    public function getMedCity(): ?string
    {
        return $this->medCity;
    }
    /**
     * Set medCity value
     * @param string $medCity
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedCity(?string $medCity = null): self
    {
        // validation for constraint: string
        if (!is_null($medCity) && !is_string($medCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medCity, true), gettype($medCity)), __LINE__);
        }
        $this->medCity = $medCity;
        
        return $this;
    }
    /**
     * Get medCountryCode value
     * @return string|null
     */
    public function getMedCountryCode(): ?string
    {
        return $this->medCountryCode;
    }
    /**
     * Set medCountryCode value
     * @param string $medCountryCode
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedCountryCode(?string $medCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($medCountryCode) && !is_string($medCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medCountryCode, true), gettype($medCountryCode)), __LINE__);
        }
        $this->medCountryCode = $medCountryCode;
        
        return $this;
    }
    /**
     * Get medEndorsement value
     * @return string|null
     */
    public function getMedEndorsement(): ?string
    {
        return $this->medEndorsement;
    }
    /**
     * Set medEndorsement value
     * @param string $medEndorsement
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedEndorsement(?string $medEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($medEndorsement) && !is_string($medEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medEndorsement, true), gettype($medEndorsement)), __LINE__);
        }
        $this->medEndorsement = $medEndorsement;
        
        return $this;
    }
    /**
     * Get medOrganisationName value
     * @return string|null
     */
    public function getMedOrganisationName(): ?string
    {
        return $this->medOrganisationName;
    }
    /**
     * Set medOrganisationName value
     * @param string $medOrganisationName
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedOrganisationName(?string $medOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($medOrganisationName) && !is_string($medOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medOrganisationName, true), gettype($medOrganisationName)), __LINE__);
        }
        $this->medOrganisationName = $medOrganisationName;
        
        return $this;
    }
    /**
     * Get medPhoneticCity value
     * @return string|null
     */
    public function getMedPhoneticCity(): ?string
    {
        return $this->medPhoneticCity;
    }
    /**
     * Set medPhoneticCity value
     * @param string $medPhoneticCity
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedPhoneticCity(?string $medPhoneticCity = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticCity) && !is_string($medPhoneticCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticCity, true), gettype($medPhoneticCity)), __LINE__);
        }
        $this->medPhoneticCity = $medPhoneticCity;
        
        return $this;
    }
    /**
     * Get medPhoneticName value
     * @return string|null
     */
    public function getMedPhoneticName(): ?string
    {
        return $this->medPhoneticName;
    }
    /**
     * Set medPhoneticName value
     * @param string $medPhoneticName
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedPhoneticName(?string $medPhoneticName = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticName) && !is_string($medPhoneticName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticName, true), gettype($medPhoneticName)), __LINE__);
        }
        $this->medPhoneticName = $medPhoneticName;
        
        return $this;
    }
    /**
     * Get medPhoneticStreet value
     * @return string|null
     */
    public function getMedPhoneticStreet(): ?string
    {
        return $this->medPhoneticStreet;
    }
    /**
     * Set medPhoneticStreet value
     * @param string $medPhoneticStreet
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedPhoneticStreet(?string $medPhoneticStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticStreet) && !is_string($medPhoneticStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticStreet, true), gettype($medPhoneticStreet)), __LINE__);
        }
        $this->medPhoneticStreet = $medPhoneticStreet;
        
        return $this;
    }
    /**
     * Get medPostalCode value
     * @return string|null
     */
    public function getMedPostalCode(): ?string
    {
        return $this->medPostalCode;
    }
    /**
     * Set medPostalCode value
     * @param string $medPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedPostalCode(?string $medPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($medPostalCode) && !is_string($medPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPostalCode, true), gettype($medPostalCode)), __LINE__);
        }
        $this->medPostalCode = $medPostalCode;
        
        return $this;
    }
    /**
     * Get medState value
     * @return string|null
     */
    public function getMedState(): ?string
    {
        return $this->medState;
    }
    /**
     * Set medState value
     * @param string $medState
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedState(?string $medState = null): self
    {
        // validation for constraint: string
        if (!is_null($medState) && !is_string($medState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medState, true), gettype($medState)), __LINE__);
        }
        $this->medState = $medState;
        
        return $this;
    }
    /**
     * Get medStreet value
     * @return string|null
     */
    public function getMedStreet(): ?string
    {
        return $this->medStreet;
    }
    /**
     * Set medStreet value
     * @param string $medStreet
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedStreet(?string $medStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($medStreet) && !is_string($medStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medStreet, true), gettype($medStreet)), __LINE__);
        }
        $this->medStreet = $medStreet;
        
        return $this;
    }
    /**
     * Get medStreetNo value
     * @return string|null
     */
    public function getMedStreetNo(): ?string
    {
        return $this->medStreetNo;
    }
    /**
     * Set medStreetNo value
     * @param string $medStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMedStreetNo(?string $medStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($medStreetNo) && !is_string($medStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medStreetNo, true), gettype($medStreetNo)), __LINE__);
        }
        $this->medStreetNo = $medStreetNo;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return int|null
     */
    public function getMediatorId(): ?int
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param int $mediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMediatorId(?int $mediatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorId) && !(is_int($mediatorId) || ctype_digit($mediatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorPortal value
     * @return string|null
     */
    public function getMediatorPortal(): ?string
    {
        return $this->mediatorPortal;
    }
    /**
     * Set mediatorPortal value
     * @param string $mediatorPortal
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMediatorPortal(?string $mediatorPortal = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorPortal) && !is_string($mediatorPortal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorPortal, true), gettype($mediatorPortal)), __LINE__);
        }
        $this->mediatorPortal = $mediatorPortal;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get midocoMediatorId value
     * @return string|null
     */
    public function getMidocoMediatorId(): ?string
    {
        return $this->midocoMediatorId;
    }
    /**
     * Set midocoMediatorId value
     * @param string $midocoMediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\MediatorDimensionDTO
     */
    public function setMidocoMediatorId(?string $midocoMediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoMediatorId) && !is_string($midocoMediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoMediatorId, true), gettype($midocoMediatorId)), __LINE__);
        }
        $this->midocoMediatorId = $midocoMediatorId;
        
        return $this;
    }
}
