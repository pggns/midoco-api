<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintMidocoSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReprintMidocoSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementBillingExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMdcSettlementBillingExt
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType[]
     */
    protected ?array $MidocoMdcSettlementBillingExt = null;
    /**
     * The CompanyErrorExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:CompanyErrorExt
     * @var \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt[]
     */
    protected ?array $CompanyErrorExt = null;
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * Constructor method for ReprintMidocoSettlementResponse
     * @uses ReprintMidocoSettlementResponse::setMidocoMdcSettlementBillingExt()
     * @uses ReprintMidocoSettlementResponse::setCompanyErrorExt()
     * @uses ReprintMidocoSettlementResponse::setBytes()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType[] $midocoMdcSettlementBillingExt
     * @param \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt[] $companyErrorExt
     * @param string $bytes
     */
    public function __construct(?array $midocoMdcSettlementBillingExt = null, ?array $companyErrorExt = null, ?string $bytes = null)
    {
        $this
            ->setMidocoMdcSettlementBillingExt($midocoMdcSettlementBillingExt)
            ->setCompanyErrorExt($companyErrorExt)
            ->setBytes($bytes);
    }
    /**
     * Get MidocoMdcSettlementBillingExt value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType[]
     */
    public function getMidocoMdcSettlementBillingExt(): ?array
    {
        return $this->MidocoMdcSettlementBillingExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMdcSettlementBillingExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementBillingExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementBillingExtForArrayConstraintFromSetMidocoMdcSettlementBillingExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) {
            // validation for constraint: itemType
            if (!$reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType) {
                $invalidValues[] = is_object($reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) ? get_class($reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) : sprintf('%s(%s)', gettype($reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem), var_export($reprintMidocoSettlementResponseMidocoMdcSettlementBillingExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementBillingExt property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementBillingExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType[] $midocoMdcSettlementBillingExt
     * @return \Pggns\MidocoApi\Orderlists\StructType\ReprintMidocoSettlementResponse
     */
    public function setMidocoMdcSettlementBillingExt(?array $midocoMdcSettlementBillingExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementBillingExtArrayErrorMessage = self::validateMidocoMdcSettlementBillingExtForArrayConstraintFromSetMidocoMdcSettlementBillingExt($midocoMdcSettlementBillingExt))) {
            throw new InvalidArgumentException($midocoMdcSettlementBillingExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementBillingExt = $midocoMdcSettlementBillingExt;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementBillingExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ReprintMidocoSettlementResponse
     */
    public function addToMidocoMdcSettlementBillingExt(\Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementBillingExt property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementBillingExt[] = $item;
        
        return $this;
    }
    /**
     * Get CompanyErrorExt value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt[]
     */
    public function getCompanyErrorExt(): ?array
    {
        return $this->CompanyErrorExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCompanyErrorExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompanyErrorExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompanyErrorExtForArrayConstraintFromSetCompanyErrorExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $reprintMidocoSettlementResponseCompanyErrorExtItem) {
            // validation for constraint: itemType
            if (!$reprintMidocoSettlementResponseCompanyErrorExtItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt) {
                $invalidValues[] = is_object($reprintMidocoSettlementResponseCompanyErrorExtItem) ? get_class($reprintMidocoSettlementResponseCompanyErrorExtItem) : sprintf('%s(%s)', gettype($reprintMidocoSettlementResponseCompanyErrorExtItem), var_export($reprintMidocoSettlementResponseCompanyErrorExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CompanyErrorExt property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CompanyErrorExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt[] $companyErrorExt
     * @return \Pggns\MidocoApi\Orderlists\StructType\ReprintMidocoSettlementResponse
     */
    public function setCompanyErrorExt(?array $companyErrorExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($companyErrorExtArrayErrorMessage = self::validateCompanyErrorExtForArrayConstraintFromSetCompanyErrorExt($companyErrorExt))) {
            throw new InvalidArgumentException($companyErrorExtArrayErrorMessage, __LINE__);
        }
        $this->CompanyErrorExt = $companyErrorExt;
        
        return $this;
    }
    /**
     * Add item to CompanyErrorExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ReprintMidocoSettlementResponse
     */
    public function addToCompanyErrorExt(\Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt) {
            throw new InvalidArgumentException(sprintf('The CompanyErrorExt property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CompanyErrorExt[] = $item;
        
        return $this;
    }
    /**
     * Get bytes value
     * @return string|null
     */
    public function getBytes(): ?string
    {
        return $this->bytes;
    }
    /**
     * Set bytes value
     * @param string $bytes
     * @return \Pggns\MidocoApi\Orderlists\StructType\ReprintMidocoSettlementResponse
     */
    public function setBytes(?string $bytes = null): self
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->bytes = $bytes;
        
        return $this;
    }
}
