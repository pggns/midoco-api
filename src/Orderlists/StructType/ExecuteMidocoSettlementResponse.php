<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMidocoSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteMidocoSettlementResponse extends AbstractStructBase
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
     * The printjobContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $printjobContent = null;
    /**
     * Constructor method for ExecuteMidocoSettlementResponse
     * @uses ExecuteMidocoSettlementResponse::setMidocoMdcSettlementBillingExt()
     * @uses ExecuteMidocoSettlementResponse::setCompanyErrorExt()
     * @uses ExecuteMidocoSettlementResponse::setPrintjobContent()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType[] $midocoMdcSettlementBillingExt
     * @param \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt[] $companyErrorExt
     * @param string[] $printjobContent
     */
    public function __construct(?array $midocoMdcSettlementBillingExt = null, ?array $companyErrorExt = null, ?array $printjobContent = null)
    {
        $this
            ->setMidocoMdcSettlementBillingExt($midocoMdcSettlementBillingExt)
            ->setCompanyErrorExt($companyErrorExt)
            ->setPrintjobContent($printjobContent);
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
        foreach ($values as $executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) {
            // validation for constraint: itemType
            if (!$executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMdcSettlementBillingExtType) {
                $invalidValues[] = is_object($executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) ? get_class($executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem) : sprintf('%s(%s)', gettype($executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem), var_export($executeMidocoSettlementResponseMidocoMdcSettlementBillingExtItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
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
        foreach ($values as $executeMidocoSettlementResponseCompanyErrorExtItem) {
            // validation for constraint: itemType
            if (!$executeMidocoSettlementResponseCompanyErrorExtItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CompanyErrorTypeExt) {
                $invalidValues[] = is_object($executeMidocoSettlementResponseCompanyErrorExtItem) ? get_class($executeMidocoSettlementResponseCompanyErrorExtItem) : sprintf('%s(%s)', gettype($executeMidocoSettlementResponseCompanyErrorExtItem), var_export($executeMidocoSettlementResponseCompanyErrorExtItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
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
     * Get printjobContent value
     * @return string[]
     */
    public function getPrintjobContent(): ?array
    {
        return $this->printjobContent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintjobContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintjobContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintjobContentForArrayConstraintFromSetPrintjobContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMidocoSettlementResponsePrintjobContentItem) {
            // validation for constraint: itemType
            if (!is_string($executeMidocoSettlementResponsePrintjobContentItem)) {
                $invalidValues[] = is_object($executeMidocoSettlementResponsePrintjobContentItem) ? get_class($executeMidocoSettlementResponsePrintjobContentItem) : sprintf('%s(%s)', gettype($executeMidocoSettlementResponsePrintjobContentItem), var_export($executeMidocoSettlementResponsePrintjobContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printjobContent property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printjobContent value
     * @throws InvalidArgumentException
     * @param string[] $printjobContent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
     */
    public function setPrintjobContent(?array $printjobContent = null): self
    {
        // validation for constraint: array
        if ('' !== ($printjobContentArrayErrorMessage = self::validatePrintjobContentForArrayConstraintFromSetPrintjobContent($printjobContent))) {
            throw new InvalidArgumentException($printjobContentArrayErrorMessage, __LINE__);
        }
        $this->printjobContent = $printjobContent;
        
        return $this;
    }
    /**
     * Add item to printjobContent value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementResponse
     */
    public function addToPrintjobContent(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The printjobContent property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printjobContent[] = $item;
        
        return $this;
    }
}
