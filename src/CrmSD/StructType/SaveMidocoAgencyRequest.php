<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAgencyRequest StructType
 * @subpackage Structs
 */
class SaveMidocoAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The AgencyProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyProperties
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties $AgencyProperties = null;
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO[]
     */
    protected ?array $MidocoAgencyCommission = null;
    /**
     * Constructor method for SaveMidocoAgencyRequest
     * @uses SaveMidocoAgencyRequest::setMidocoCrmCustomer()
     * @uses SaveMidocoAgencyRequest::setMidocoCrmCustomerPayment()
     * @uses SaveMidocoAgencyRequest::setMidocoCrmDebitCard()
     * @uses SaveMidocoAgencyRequest::setAgencyProperties()
     * @uses SaveMidocoAgencyRequest::setMidocoAgencyCommission()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties $agencyProperties
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?array $midocoCrmDebitCard = null, ?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties $agencyProperties = null, ?array $midocoAgencyCommission = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setAgencyProperties($agencyProperties)
            ->setMidocoAgencyCommission($midocoAgencyCommission);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMidocoAgencyRequestMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$saveMidocoAgencyRequestMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($saveMidocoAgencyRequestMidocoCrmDebitCardItem) ? get_class($saveMidocoAgencyRequestMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($saveMidocoAgencyRequestMidocoCrmDebitCardItem), var_export($saveMidocoAgencyRequestMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyProperties value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties|null
     */
    public function getAgencyProperties(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties
    {
        return $this->AgencyProperties;
    }
    /**
     * Set AgencyProperties value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties $agencyProperties
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function setAgencyProperties(?\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyProperties $agencyProperties = null): self
    {
        $this->AgencyProperties = $agencyProperties;
        
        return $this;
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): ?array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMidocoAgencyRequestMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$saveMidocoAgencyRequestMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($saveMidocoAgencyRequestMidocoAgencyCommissionItem) ? get_class($saveMidocoAgencyRequestMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($saveMidocoAgencyRequestMidocoAgencyCommissionItem), var_export($saveMidocoAgencyRequestMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function setMidocoAgencyCommission(?array $midocoAgencyCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyRequest
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
}
