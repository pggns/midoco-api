<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyData StructType
 * Meta information extracted from the WSDL
 * - documentation: Special data in case of a company customer
 * @subpackage Structs
 */
class CompanyData_1 extends AbstractStructBase
{
    /**
     * The salutation
     * Meta information extracted from the WSDL
     * - documentation: THe salutation of the contact-person of the company
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The contactPerson
     * Meta information extracted from the WSDL
     * - documentation: Forename and name of the contact-person in the company
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The organisationName
     * Meta information extracted from the WSDL
     * - documentation: Name of the company
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * The vatId
     * Meta information extracted from the WSDL
     * - documentation: vat id of the company
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * Constructor method for CompanyData
     * @uses CompanyData_1::setSalutation()
     * @uses CompanyData_1::setContactPerson()
     * @uses CompanyData_1::setOrganisationName()
     * @uses CompanyData_1::setVatId()
     * @param string $salutation
     * @param string $contactPerson
     * @param string $organisationName
     * @param string $vatId
     */
    public function __construct(?string $salutation = null, ?string $contactPerson = null, ?string $organisationName = null, ?string $vatId = null)
    {
        $this
            ->setSalutation($salutation)
            ->setContactPerson($contactPerson)
            ->setOrganisationName($organisationName)
            ->setVatId($vatId);
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @uses \Pggns\MidocoApi\Order\EnumType\SalutationType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\SalutationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData_1
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\SalutationType::valueIsValid($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\SalutationType', is_array($salutation) ? implode(', ', $salutation) : var_export($salutation, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\SalutationType::getValidValues())), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData_1
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData_1
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData_1
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
}
