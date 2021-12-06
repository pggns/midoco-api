<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerCriteriaRequest StructType
 * @subpackage Structs
 */
class SaveCustomerCriteriaRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCustomerCriteriaRequest
     * @uses SaveCustomerCriteriaRequest::setMidocoCustomerId()
     * @uses SaveCustomerCriteriaRequest::setMidocoCrmCriteria()
     * @uses SaveCustomerCriteriaRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO[] $midocoCrmCriteria
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null, ?array $midocoCrmCriteria = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCustomerCriteriaRequestMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$saveCustomerCriteriaRequestMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO) {
                $invalidValues[] = is_object($saveCustomerCriteriaRequestMidocoCrmCriteriaItem) ? get_class($saveCustomerCriteriaRequestMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($saveCustomerCriteriaRequestMidocoCrmCriteriaItem), var_export($saveCustomerCriteriaRequestMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCriteriaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
