<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoArErListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoArErListCriteriaType extends AbstractStructBase
{
    /**
     * The accountType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $accountType = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The orgUnits
     * @var string|null
     */
    protected ?string $orgUnits = null;
    /**
     * The excludedOrgUnits
     * @var string|null
     */
    protected ?string $excludedOrgUnits = null;
    /**
     * The accountIdFrom
     * @var string|null
     */
    protected ?string $accountIdFrom = null;
    /**
     * The accountIdTo
     * @var string|null
     */
    protected ?string $accountIdTo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelCreationDateFrom
     * @var string|null
     */
    protected ?string $travelCreationDateFrom = null;
    /**
     * The travelCreationDateUntil
     * @var string|null
     */
    protected ?string $travelCreationDateUntil = null;
    /**
     * The travelFrom
     * @var string|null
     */
    protected ?string $travelFrom = null;
    /**
     * The travelUntil
     * @var string|null
     */
    protected ?string $travelUntil = null;
    /**
     * Constructor method for MidocoArErListCriteriaType
     * @uses MidocoArErListCriteriaType::setAccountType()
     * @uses MidocoArErListCriteriaType::setStartTravel()
     * @uses MidocoArErListCriteriaType::setCreationDate()
     * @uses MidocoArErListCriteriaType::setType()
     * @uses MidocoArErListCriteriaType::setOrgUnits()
     * @uses MidocoArErListCriteriaType::setExcludedOrgUnits()
     * @uses MidocoArErListCriteriaType::setAccountIdFrom()
     * @uses MidocoArErListCriteriaType::setAccountIdTo()
     * @uses MidocoArErListCriteriaType::setOrderNo()
     * @uses MidocoArErListCriteriaType::setTravelCreationDateFrom()
     * @uses MidocoArErListCriteriaType::setTravelCreationDateUntil()
     * @uses MidocoArErListCriteriaType::setTravelFrom()
     * @uses MidocoArErListCriteriaType::setTravelUntil()
     * @param string[] $accountType
     * @param string $startTravel
     * @param string $creationDate
     * @param string $type
     * @param string $orgUnits
     * @param string $excludedOrgUnits
     * @param string $accountIdFrom
     * @param string $accountIdTo
     * @param int $orderNo
     * @param string $travelCreationDateFrom
     * @param string $travelCreationDateUntil
     * @param string $travelFrom
     * @param string $travelUntil
     */
    public function __construct(?array $accountType = null, ?string $startTravel = null, ?string $creationDate = null, ?string $type = null, ?string $orgUnits = null, ?string $excludedOrgUnits = null, ?string $accountIdFrom = null, ?string $accountIdTo = null, ?int $orderNo = null, ?string $travelCreationDateFrom = null, ?string $travelCreationDateUntil = null, ?string $travelFrom = null, ?string $travelUntil = null)
    {
        $this
            ->setAccountType($accountType)
            ->setStartTravel($startTravel)
            ->setCreationDate($creationDate)
            ->setType($type)
            ->setOrgUnits($orgUnits)
            ->setExcludedOrgUnits($excludedOrgUnits)
            ->setAccountIdFrom($accountIdFrom)
            ->setAccountIdTo($accountIdTo)
            ->setOrderNo($orderNo)
            ->setTravelCreationDateFrom($travelCreationDateFrom)
            ->setTravelCreationDateUntil($travelCreationDateUntil)
            ->setTravelFrom($travelFrom)
            ->setTravelUntil($travelUntil);
    }
    /**
     * Get accountType value
     * @return string[]
     */
    public function getAccountType(): ?array
    {
        return $this->accountType;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountTypeForArrayConstraintsFromSetAccountType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoArErListCriteriaTypeAccountTypeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoArErListCriteriaTypeAccountTypeItem)) {
                $invalidValues[] = is_object($midocoArErListCriteriaTypeAccountTypeItem) ? get_class($midocoArErListCriteriaTypeAccountTypeItem) : sprintf('%s(%s)', gettype($midocoArErListCriteriaTypeAccountTypeItem), var_export($midocoArErListCriteriaTypeAccountTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accountType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accountType value
     * @throws InvalidArgumentException
     * @param string[] $accountType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setAccountType(?array $accountType = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountTypeArrayErrorMessage = self::validateAccountTypeForArrayConstraintsFromSetAccountType($accountType))) {
            throw new InvalidArgumentException($accountTypeArrayErrorMessage, __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Add item to accountType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function addToAccountType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The accountType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accountType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string|null
     */
    public function getOrgUnits(): ?string
    {
        return $this->orgUnits;
    }
    /**
     * Set orgUnits value
     * @param string $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setOrgUnits(?string $orgUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnits) && !is_string($orgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnits, true), gettype($orgUnits)), __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Get excludedOrgUnits value
     * @return string|null
     */
    public function getExcludedOrgUnits(): ?string
    {
        return $this->excludedOrgUnits;
    }
    /**
     * Set excludedOrgUnits value
     * @param string $excludedOrgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setExcludedOrgUnits(?string $excludedOrgUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedOrgUnits) && !is_string($excludedOrgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedOrgUnits, true), gettype($excludedOrgUnits)), __LINE__);
        }
        $this->excludedOrgUnits = $excludedOrgUnits;
        
        return $this;
    }
    /**
     * Get accountIdFrom value
     * @return string|null
     */
    public function getAccountIdFrom(): ?string
    {
        return $this->accountIdFrom;
    }
    /**
     * Set accountIdFrom value
     * @param string $accountIdFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setAccountIdFrom(?string $accountIdFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdFrom) && !is_string($accountIdFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdFrom, true), gettype($accountIdFrom)), __LINE__);
        }
        $this->accountIdFrom = $accountIdFrom;
        
        return $this;
    }
    /**
     * Get accountIdTo value
     * @return string|null
     */
    public function getAccountIdTo(): ?string
    {
        return $this->accountIdTo;
    }
    /**
     * Set accountIdTo value
     * @param string $accountIdTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setAccountIdTo(?string $accountIdTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdTo) && !is_string($accountIdTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdTo, true), gettype($accountIdTo)), __LINE__);
        }
        $this->accountIdTo = $accountIdTo;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get travelCreationDateFrom value
     * @return string|null
     */
    public function getTravelCreationDateFrom(): ?string
    {
        return $this->travelCreationDateFrom;
    }
    /**
     * Set travelCreationDateFrom value
     * @param string $travelCreationDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setTravelCreationDateFrom(?string $travelCreationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelCreationDateFrom) && !is_string($travelCreationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelCreationDateFrom, true), gettype($travelCreationDateFrom)), __LINE__);
        }
        $this->travelCreationDateFrom = $travelCreationDateFrom;
        
        return $this;
    }
    /**
     * Get travelCreationDateUntil value
     * @return string|null
     */
    public function getTravelCreationDateUntil(): ?string
    {
        return $this->travelCreationDateUntil;
    }
    /**
     * Set travelCreationDateUntil value
     * @param string $travelCreationDateUntil
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setTravelCreationDateUntil(?string $travelCreationDateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($travelCreationDateUntil) && !is_string($travelCreationDateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelCreationDateUntil, true), gettype($travelCreationDateUntil)), __LINE__);
        }
        $this->travelCreationDateUntil = $travelCreationDateUntil;
        
        return $this;
    }
    /**
     * Get travelFrom value
     * @return string|null
     */
    public function getTravelFrom(): ?string
    {
        return $this->travelFrom;
    }
    /**
     * Set travelFrom value
     * @param string $travelFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setTravelFrom(?string $travelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFrom) && !is_string($travelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFrom, true), gettype($travelFrom)), __LINE__);
        }
        $this->travelFrom = $travelFrom;
        
        return $this;
    }
    /**
     * Get travelUntil value
     * @return string|null
     */
    public function getTravelUntil(): ?string
    {
        return $this->travelUntil;
    }
    /**
     * Set travelUntil value
     * @param string $travelUntil
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
     */
    public function setTravelUntil(?string $travelUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($travelUntil) && !is_string($travelUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelUntil, true), gettype($travelUntil)), __LINE__);
        }
        $this->travelUntil = $travelUntil;
        
        return $this;
    }
}
