<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceipt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoReceipt extends ReceiptDTO
{
    /**
     * The MidocoReceiptPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoReceiptPosition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition[]
     */
    protected ?array $MidocoReceiptPosition = null;
    /**
     * The MidocoDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDebitInfoForReceipt
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt $MidocoDebitInfoForReceipt = null;
    /**
     * The MidocoAdditionalInfoForReceipt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalInfoForReceipt
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt[]
     */
    protected ?array $MidocoAdditionalInfoForReceipt = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $MidocoOnlinePaymentTransaction = null;
    /**
     * Constructor method for MidocoReceipt
     * @uses MidocoReceipt::setMidocoReceiptPosition()
     * @uses MidocoReceipt::setMidocoDebitInfoForReceipt()
     * @uses MidocoReceipt::setMidocoAdditionalInfoForReceipt()
     * @uses MidocoReceipt::setMidocoOnlinePaymentTransaction()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition[] $midocoReceiptPosition
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt[] $midocoAdditionalInfoForReceipt
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     */
    public function __construct(?array $midocoReceiptPosition = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null, ?array $midocoAdditionalInfoForReceipt = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null)
    {
        $this
            ->setMidocoReceiptPosition($midocoReceiptPosition)
            ->setMidocoDebitInfoForReceipt($midocoDebitInfoForReceipt)
            ->setMidocoAdditionalInfoForReceipt($midocoAdditionalInfoForReceipt)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction);
    }
    /**
     * Get MidocoReceiptPosition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition[]
     */
    public function getMidocoReceiptPosition(): ?array
    {
        return $this->MidocoReceiptPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoReceiptPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoReceiptPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoReceiptPositionForArrayConstraintFromSetMidocoReceiptPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoReceiptMidocoReceiptPositionItem) {
            // validation for constraint: itemType
            if (!$midocoReceiptMidocoReceiptPositionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition) {
                $invalidValues[] = is_object($midocoReceiptMidocoReceiptPositionItem) ? get_class($midocoReceiptMidocoReceiptPositionItem) : sprintf('%s(%s)', gettype($midocoReceiptMidocoReceiptPositionItem), var_export($midocoReceiptMidocoReceiptPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoReceiptPosition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoReceiptPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition[] $midocoReceiptPosition
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function setMidocoReceiptPosition(?array $midocoReceiptPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoReceiptPositionArrayErrorMessage = self::validateMidocoReceiptPositionForArrayConstraintFromSetMidocoReceiptPosition($midocoReceiptPosition))) {
            throw new InvalidArgumentException($midocoReceiptPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoReceiptPosition = $midocoReceiptPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoReceiptPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function addToMidocoReceiptPosition(\Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoReceiptPosition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoReceiptPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoReceiptPosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitInfoForReceipt value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt|null
     */
    public function getMidocoDebitInfoForReceipt(): ?\Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt
    {
        return $this->MidocoDebitInfoForReceipt;
    }
    /**
     * Set MidocoDebitInfoForReceipt value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function setMidocoDebitInfoForReceipt(?\Pggns\MidocoApi\Documents\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null): self
    {
        $this->MidocoDebitInfoForReceipt = $midocoDebitInfoForReceipt;
        
        return $this;
    }
    /**
     * Get MidocoAdditionalInfoForReceipt value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt[]
     */
    public function getMidocoAdditionalInfoForReceipt(): ?array
    {
        return $this->MidocoAdditionalInfoForReceipt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdditionalInfoForReceipt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalInfoForReceipt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalInfoForReceiptForArrayConstraintFromSetMidocoAdditionalInfoForReceipt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoReceiptMidocoAdditionalInfoForReceiptItem) {
            // validation for constraint: itemType
            if (!$midocoReceiptMidocoAdditionalInfoForReceiptItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt) {
                $invalidValues[] = is_object($midocoReceiptMidocoAdditionalInfoForReceiptItem) ? get_class($midocoReceiptMidocoAdditionalInfoForReceiptItem) : sprintf('%s(%s)', gettype($midocoReceiptMidocoAdditionalInfoForReceiptItem), var_export($midocoReceiptMidocoAdditionalInfoForReceiptItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdditionalInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdditionalInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt[] $midocoAdditionalInfoForReceipt
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function setMidocoAdditionalInfoForReceipt(?array $midocoAdditionalInfoForReceipt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalInfoForReceiptArrayErrorMessage = self::validateMidocoAdditionalInfoForReceiptForArrayConstraintFromSetMidocoAdditionalInfoForReceipt($midocoAdditionalInfoForReceipt))) {
            throw new InvalidArgumentException($midocoAdditionalInfoForReceiptArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalInfoForReceipt = $midocoAdditionalInfoForReceipt;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function addToMidocoAdditionalInfoForReceipt(\Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt) {
            throw new InvalidArgumentException(sprintf('The MidocoAdditionalInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAdditionalInfoForReceipt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdditionalInfoForReceipt[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction|null
     */
    public function getMidocoOnlinePaymentTransaction(): ?\Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt
     */
    public function setMidocoOnlinePaymentTransaction(?\Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null): self
    {
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
}
