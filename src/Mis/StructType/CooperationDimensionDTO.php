<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CooperationDimensionDTO StructType
 * @subpackage Structs
 */
class CooperationDimensionDTO extends AbstractStructBase
{
    /**
     * The coopCity
     * @var string|null
     */
    protected ?string $coopCity = null;
    /**
     * The coopCountryCode
     * @var string|null
     */
    protected ?string $coopCountryCode = null;
    /**
     * The coopEndorsement
     * @var string|null
     */
    protected ?string $coopEndorsement = null;
    /**
     * The coopOrganisationName
     * @var string|null
     */
    protected ?string $coopOrganisationName = null;
    /**
     * The coopPhoneticCity
     * @var string|null
     */
    protected ?string $coopPhoneticCity = null;
    /**
     * The coopPhoneticName
     * @var string|null
     */
    protected ?string $coopPhoneticName = null;
    /**
     * The coopPhoneticStreet
     * @var string|null
     */
    protected ?string $coopPhoneticStreet = null;
    /**
     * The coopPostalCode
     * @var string|null
     */
    protected ?string $coopPostalCode = null;
    /**
     * The coopState
     * @var string|null
     */
    protected ?string $coopState = null;
    /**
     * The coopStreet
     * @var string|null
     */
    protected ?string $coopStreet = null;
    /**
     * The coopStreetNo
     * @var string|null
     */
    protected ?string $coopStreetNo = null;
    /**
     * The cooperationId
     * @var int|null
     */
    protected ?int $cooperationId = null;
    /**
     * The midocoCooperationId
     * @var string|null
     */
    protected ?string $midocoCooperationId = null;
    /**
     * Constructor method for CooperationDimensionDTO
     * @uses CooperationDimensionDTO::setCoopCity()
     * @uses CooperationDimensionDTO::setCoopCountryCode()
     * @uses CooperationDimensionDTO::setCoopEndorsement()
     * @uses CooperationDimensionDTO::setCoopOrganisationName()
     * @uses CooperationDimensionDTO::setCoopPhoneticCity()
     * @uses CooperationDimensionDTO::setCoopPhoneticName()
     * @uses CooperationDimensionDTO::setCoopPhoneticStreet()
     * @uses CooperationDimensionDTO::setCoopPostalCode()
     * @uses CooperationDimensionDTO::setCoopState()
     * @uses CooperationDimensionDTO::setCoopStreet()
     * @uses CooperationDimensionDTO::setCoopStreetNo()
     * @uses CooperationDimensionDTO::setCooperationId()
     * @uses CooperationDimensionDTO::setMidocoCooperationId()
     * @param string $coopCity
     * @param string $coopCountryCode
     * @param string $coopEndorsement
     * @param string $coopOrganisationName
     * @param string $coopPhoneticCity
     * @param string $coopPhoneticName
     * @param string $coopPhoneticStreet
     * @param string $coopPostalCode
     * @param string $coopState
     * @param string $coopStreet
     * @param string $coopStreetNo
     * @param int $cooperationId
     * @param string $midocoCooperationId
     */
    public function __construct(?string $coopCity = null, ?string $coopCountryCode = null, ?string $coopEndorsement = null, ?string $coopOrganisationName = null, ?string $coopPhoneticCity = null, ?string $coopPhoneticName = null, ?string $coopPhoneticStreet = null, ?string $coopPostalCode = null, ?string $coopState = null, ?string $coopStreet = null, ?string $coopStreetNo = null, ?int $cooperationId = null, ?string $midocoCooperationId = null)
    {
        $this
            ->setCoopCity($coopCity)
            ->setCoopCountryCode($coopCountryCode)
            ->setCoopEndorsement($coopEndorsement)
            ->setCoopOrganisationName($coopOrganisationName)
            ->setCoopPhoneticCity($coopPhoneticCity)
            ->setCoopPhoneticName($coopPhoneticName)
            ->setCoopPhoneticStreet($coopPhoneticStreet)
            ->setCoopPostalCode($coopPostalCode)
            ->setCoopState($coopState)
            ->setCoopStreet($coopStreet)
            ->setCoopStreetNo($coopStreetNo)
            ->setCooperationId($cooperationId)
            ->setMidocoCooperationId($midocoCooperationId);
    }
    /**
     * Get coopCity value
     * @return string|null
     */
    public function getCoopCity(): ?string
    {
        return $this->coopCity;
    }
    /**
     * Set coopCity value
     * @param string $coopCity
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopCity(?string $coopCity = null): self
    {
        // validation for constraint: string
        if (!is_null($coopCity) && !is_string($coopCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopCity, true), gettype($coopCity)), __LINE__);
        }
        $this->coopCity = $coopCity;
        
        return $this;
    }
    /**
     * Get coopCountryCode value
     * @return string|null
     */
    public function getCoopCountryCode(): ?string
    {
        return $this->coopCountryCode;
    }
    /**
     * Set coopCountryCode value
     * @param string $coopCountryCode
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopCountryCode(?string $coopCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($coopCountryCode) && !is_string($coopCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopCountryCode, true), gettype($coopCountryCode)), __LINE__);
        }
        $this->coopCountryCode = $coopCountryCode;
        
        return $this;
    }
    /**
     * Get coopEndorsement value
     * @return string|null
     */
    public function getCoopEndorsement(): ?string
    {
        return $this->coopEndorsement;
    }
    /**
     * Set coopEndorsement value
     * @param string $coopEndorsement
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopEndorsement(?string $coopEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($coopEndorsement) && !is_string($coopEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopEndorsement, true), gettype($coopEndorsement)), __LINE__);
        }
        $this->coopEndorsement = $coopEndorsement;
        
        return $this;
    }
    /**
     * Get coopOrganisationName value
     * @return string|null
     */
    public function getCoopOrganisationName(): ?string
    {
        return $this->coopOrganisationName;
    }
    /**
     * Set coopOrganisationName value
     * @param string $coopOrganisationName
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopOrganisationName(?string $coopOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($coopOrganisationName) && !is_string($coopOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopOrganisationName, true), gettype($coopOrganisationName)), __LINE__);
        }
        $this->coopOrganisationName = $coopOrganisationName;
        
        return $this;
    }
    /**
     * Get coopPhoneticCity value
     * @return string|null
     */
    public function getCoopPhoneticCity(): ?string
    {
        return $this->coopPhoneticCity;
    }
    /**
     * Set coopPhoneticCity value
     * @param string $coopPhoneticCity
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopPhoneticCity(?string $coopPhoneticCity = null): self
    {
        // validation for constraint: string
        if (!is_null($coopPhoneticCity) && !is_string($coopPhoneticCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopPhoneticCity, true), gettype($coopPhoneticCity)), __LINE__);
        }
        $this->coopPhoneticCity = $coopPhoneticCity;
        
        return $this;
    }
    /**
     * Get coopPhoneticName value
     * @return string|null
     */
    public function getCoopPhoneticName(): ?string
    {
        return $this->coopPhoneticName;
    }
    /**
     * Set coopPhoneticName value
     * @param string $coopPhoneticName
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopPhoneticName(?string $coopPhoneticName = null): self
    {
        // validation for constraint: string
        if (!is_null($coopPhoneticName) && !is_string($coopPhoneticName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopPhoneticName, true), gettype($coopPhoneticName)), __LINE__);
        }
        $this->coopPhoneticName = $coopPhoneticName;
        
        return $this;
    }
    /**
     * Get coopPhoneticStreet value
     * @return string|null
     */
    public function getCoopPhoneticStreet(): ?string
    {
        return $this->coopPhoneticStreet;
    }
    /**
     * Set coopPhoneticStreet value
     * @param string $coopPhoneticStreet
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopPhoneticStreet(?string $coopPhoneticStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($coopPhoneticStreet) && !is_string($coopPhoneticStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopPhoneticStreet, true), gettype($coopPhoneticStreet)), __LINE__);
        }
        $this->coopPhoneticStreet = $coopPhoneticStreet;
        
        return $this;
    }
    /**
     * Get coopPostalCode value
     * @return string|null
     */
    public function getCoopPostalCode(): ?string
    {
        return $this->coopPostalCode;
    }
    /**
     * Set coopPostalCode value
     * @param string $coopPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopPostalCode(?string $coopPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($coopPostalCode) && !is_string($coopPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopPostalCode, true), gettype($coopPostalCode)), __LINE__);
        }
        $this->coopPostalCode = $coopPostalCode;
        
        return $this;
    }
    /**
     * Get coopState value
     * @return string|null
     */
    public function getCoopState(): ?string
    {
        return $this->coopState;
    }
    /**
     * Set coopState value
     * @param string $coopState
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopState(?string $coopState = null): self
    {
        // validation for constraint: string
        if (!is_null($coopState) && !is_string($coopState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopState, true), gettype($coopState)), __LINE__);
        }
        $this->coopState = $coopState;
        
        return $this;
    }
    /**
     * Get coopStreet value
     * @return string|null
     */
    public function getCoopStreet(): ?string
    {
        return $this->coopStreet;
    }
    /**
     * Set coopStreet value
     * @param string $coopStreet
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopStreet(?string $coopStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($coopStreet) && !is_string($coopStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopStreet, true), gettype($coopStreet)), __LINE__);
        }
        $this->coopStreet = $coopStreet;
        
        return $this;
    }
    /**
     * Get coopStreetNo value
     * @return string|null
     */
    public function getCoopStreetNo(): ?string
    {
        return $this->coopStreetNo;
    }
    /**
     * Set coopStreetNo value
     * @param string $coopStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCoopStreetNo(?string $coopStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($coopStreetNo) && !is_string($coopStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coopStreetNo, true), gettype($coopStreetNo)), __LINE__);
        }
        $this->coopStreetNo = $coopStreetNo;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return int|null
     */
    public function getCooperationId(): ?int
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param int $cooperationId
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setCooperationId(?int $cooperationId = null): self
    {
        // validation for constraint: int
        if (!is_null($cooperationId) && !(is_int($cooperationId) || ctype_digit($cooperationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get midocoCooperationId value
     * @return string|null
     */
    public function getMidocoCooperationId(): ?string
    {
        return $this->midocoCooperationId;
    }
    /**
     * Set midocoCooperationId value
     * @param string $midocoCooperationId
     * @return \Pggns\MidocoApi\Mis\StructType\CooperationDimensionDTO
     */
    public function setMidocoCooperationId(?string $midocoCooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoCooperationId) && !is_string($midocoCooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoCooperationId, true), gettype($midocoCooperationId)), __LINE__);
        }
        $this->midocoCooperationId = $midocoCooperationId;
        
        return $this;
    }
}
