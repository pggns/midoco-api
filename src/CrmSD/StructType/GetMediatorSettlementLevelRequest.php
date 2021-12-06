<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorSettlementLevelRequest StructType
 * @subpackage Structs
 */
class GetMediatorSettlementLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - choice: MidocoCustomerId | MediatorId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MediatorId
     * Meta information extracted from the WSDL
     * - choice: MidocoCustomerId | MediatorId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $MediatorId = null;
    /**
     * Constructor method for GetMediatorSettlementLevelRequest
     * @uses GetMediatorSettlementLevelRequest::setMidocoCustomerId()
     * @uses GetMediatorSettlementLevelRequest::setMediatorId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @param string $mediatorId
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null, ?string $mediatorId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMediatorId($mediatorId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
    {
        return isset($this->MidocoCustomerId) ? $this->MidocoCustomerId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMidocoCustomerIdForChoiceConstraintsFromSetMidocoCustomerId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MediatorId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoCustomerId can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoCustomerId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetMediatorSettlementLevelRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        // validation for constraint: choice(MidocoCustomerId, MediatorId)
        if ('' !== ($midocoCustomerIdChoiceErrorMessage = self::validateMidocoCustomerIdForChoiceConstraintsFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($midocoCustomerId) || (is_array($midocoCustomerId) && empty($midocoCustomerId))) {
            unset($this->MidocoCustomerId);
        } else {
            $this->MidocoCustomerId = $midocoCustomerId;
        }
        
        return $this;
    }
    /**
     * Get MediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return isset($this->MediatorId) ? $this->MediatorId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMediatorId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMediatorIdForChoiceConstraintsFromSetMediatorId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoCustomerId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MediatorId can\'t be set as the property %s is already set. Only one property must be set among these properties: MediatorId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MediatorId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetMediatorSettlementLevelRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        // validation for constraint: choice(MidocoCustomerId, MediatorId)
        if ('' !== ($mediatorIdChoiceErrorMessage = self::validateMediatorIdForChoiceConstraintsFromSetMediatorId($mediatorId))) {
            throw new InvalidArgumentException($mediatorIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($mediatorId) || (is_array($mediatorId) && empty($mediatorId))) {
            unset($this->MediatorId);
        } else {
            $this->MediatorId = $mediatorId;
        }
        
        return $this;
    }
}
