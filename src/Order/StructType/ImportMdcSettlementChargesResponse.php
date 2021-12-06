<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportMdcSettlementChargesResponse StructType
 * @subpackage Structs
 */
class ImportMdcSettlementChargesResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementCharge
     * @var \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[]
     */
    protected ?array $MidocoMdcSettlementCharge = null;
    /**
     * The CompanyErrorExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CompanyErrorExt
     * @var \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt[]
     */
    protected ?array $CompanyErrorExt = null;
    /**
     * Constructor method for ImportMdcSettlementChargesResponse
     * @uses ImportMdcSettlementChargesResponse::setMidocoMdcSettlementCharge()
     * @uses ImportMdcSettlementChargesResponse::setCompanyErrorExt()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     * @param \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt[] $companyErrorExt
     */
    public function __construct(?array $midocoMdcSettlementCharge = null, ?array $companyErrorExt = null)
    {
        $this
            ->setMidocoMdcSettlementCharge($midocoMdcSettlementCharge)
            ->setCompanyErrorExt($companyErrorExt);
    }
    /**
     * Get MidocoMdcSettlementCharge value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[]
     */
    public function getMidocoMdcSettlementCharge(): ?array
    {
        return $this->MidocoMdcSettlementCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO) {
                $invalidValues[] = is_object($importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem) ? get_class($importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem) : sprintf('%s(%s)', gettype($importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem), var_export($importMdcSettlementChargesResponseMidocoMdcSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     * @return \Pggns\MidocoApi\Api\Order\StructType\ImportMdcSettlementChargesResponse
     */
    public function setMidocoMdcSettlementCharge(?array $midocoMdcSettlementCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementChargeArrayErrorMessage = self::validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge($midocoMdcSettlementCharge))) {
            throw new InvalidArgumentException($midocoMdcSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementCharge = $midocoMdcSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\ImportMdcSettlementChargesResponse
     */
    public function addToMidocoMdcSettlementCharge(\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementCharge[] = $item;
        
        return $this;
    }
    /**
     * Get CompanyErrorExt value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt[]
     */
    public function getCompanyErrorExt(): ?array
    {
        return $this->CompanyErrorExt;
    }
    /**
     * This method is responsible for validating the values passed to the setCompanyErrorExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompanyErrorExt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompanyErrorExtForArrayConstraintsFromSetCompanyErrorExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importMdcSettlementChargesResponseCompanyErrorExtItem) {
            // validation for constraint: itemType
            if (!$importMdcSettlementChargesResponseCompanyErrorExtItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt) {
                $invalidValues[] = is_object($importMdcSettlementChargesResponseCompanyErrorExtItem) ? get_class($importMdcSettlementChargesResponseCompanyErrorExtItem) : sprintf('%s(%s)', gettype($importMdcSettlementChargesResponseCompanyErrorExtItem), var_export($importMdcSettlementChargesResponseCompanyErrorExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CompanyErrorExt property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CompanyErrorExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt[] $companyErrorExt
     * @return \Pggns\MidocoApi\Api\Order\StructType\ImportMdcSettlementChargesResponse
     */
    public function setCompanyErrorExt(?array $companyErrorExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($companyErrorExtArrayErrorMessage = self::validateCompanyErrorExtForArrayConstraintsFromSetCompanyErrorExt($companyErrorExt))) {
            throw new InvalidArgumentException($companyErrorExtArrayErrorMessage, __LINE__);
        }
        $this->CompanyErrorExt = $companyErrorExt;
        
        return $this;
    }
    /**
     * Add item to CompanyErrorExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\ImportMdcSettlementChargesResponse
     */
    public function addToCompanyErrorExt(\Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt) {
            throw new InvalidArgumentException(sprintf('The CompanyErrorExt property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CompanyErrorTypeExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CompanyErrorExt[] = $item;
        
        return $this;
    }
}
