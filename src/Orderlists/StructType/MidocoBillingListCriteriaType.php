<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoBillingListCriteriaType extends AbstractStructBase
{
    /**
     * The dateOfIssueFrom
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dateOfIssueFrom;
    /**
     * The dateOfIssueTo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dateOfIssueTo;
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * Constructor method for MidocoBillingListCriteriaType
     * @uses MidocoBillingListCriteriaType::setDateOfIssueFrom()
     * @uses MidocoBillingListCriteriaType::setDateOfIssueTo()
     * @uses MidocoBillingListCriteriaType::setOrgUnits()
     * @uses MidocoBillingListCriteriaType::setDebitorNo()
     * @uses MidocoBillingListCriteriaType::setAccountId()
     * @uses MidocoBillingListCriteriaType::setTravelDateFrom()
     * @uses MidocoBillingListCriteriaType::setTravelDateTo()
     * @param string $dateOfIssueFrom
     * @param string $dateOfIssueTo
     * @param string[] $orgUnits
     * @param string $debitorNo
     * @param string $accountId
     * @param string $travelDateFrom
     * @param string $travelDateTo
     */
    public function __construct(string $dateOfIssueFrom, string $dateOfIssueTo, ?array $orgUnits = null, ?string $debitorNo = null, ?string $accountId = null, ?string $travelDateFrom = null, ?string $travelDateTo = null)
    {
        $this
            ->setDateOfIssueFrom($dateOfIssueFrom)
            ->setDateOfIssueTo($dateOfIssueTo)
            ->setOrgUnits($orgUnits)
            ->setDebitorNo($debitorNo)
            ->setAccountId($accountId)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo);
    }
    /**
     * Get dateOfIssueFrom value
     * @return string
     */
    public function getDateOfIssueFrom(): string
    {
        return $this->dateOfIssueFrom;
    }
    /**
     * Set dateOfIssueFrom value
     * @param string $dateOfIssueFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setDateOfIssueFrom(string $dateOfIssueFrom): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssueFrom) && !is_string($dateOfIssueFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssueFrom, true), gettype($dateOfIssueFrom)), __LINE__);
        }
        $this->dateOfIssueFrom = $dateOfIssueFrom;
        
        return $this;
    }
    /**
     * Get dateOfIssueTo value
     * @return string
     */
    public function getDateOfIssueTo(): string
    {
        return $this->dateOfIssueTo;
    }
    /**
     * Set dateOfIssueTo value
     * @param string $dateOfIssueTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setDateOfIssueTo(string $dateOfIssueTo): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssueTo) && !is_string($dateOfIssueTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssueTo, true), gettype($dateOfIssueTo)), __LINE__);
        }
        $this->dateOfIssueTo = $dateOfIssueTo;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBillingListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoBillingListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoBillingListCriteriaTypeOrgUnitsItem) ? get_class($midocoBillingListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoBillingListCriteriaTypeOrgUnitsItem), var_export($midocoBillingListCriteriaTypeOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListCriteriaType
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
}
