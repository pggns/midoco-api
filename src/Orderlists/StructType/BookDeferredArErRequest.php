<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookDeferredArErRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookDeferredArErRequest extends AbstractStructBase
{
    /**
     * The midocoDeferralArErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[]
     */
    protected ?array $midocoDeferralArErOutputList = null;
    /**
     * Constructor method for BookDeferredArErRequest
     * @uses BookDeferredArErRequest::setMidocoDeferralArErOutputList()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[] $midocoDeferralArErOutputList
     */
    public function __construct(?array $midocoDeferralArErOutputList = null)
    {
        $this
            ->setMidocoDeferralArErOutputList($midocoDeferralArErOutputList);
    }
    /**
     * Get midocoDeferralArErOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[]
     */
    public function getMidocoDeferralArErOutputList(): ?array
    {
        return $this->midocoDeferralArErOutputList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDeferralArErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeferralArErOutputList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeferralArErOutputListForArrayConstraintFromSetMidocoDeferralArErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookDeferredArErRequestMidocoDeferralArErOutputListItem) {
            // validation for constraint: itemType
            if (!$bookDeferredArErRequestMidocoDeferralArErOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType) {
                $invalidValues[] = is_object($bookDeferredArErRequestMidocoDeferralArErOutputListItem) ? get_class($bookDeferredArErRequestMidocoDeferralArErOutputListItem) : sprintf('%s(%s)', gettype($bookDeferredArErRequestMidocoDeferralArErOutputListItem), var_export($bookDeferredArErRequestMidocoDeferralArErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDeferralArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDeferralArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[] $midocoDeferralArErOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\BookDeferredArErRequest
     */
    public function setMidocoDeferralArErOutputList(?array $midocoDeferralArErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeferralArErOutputListArrayErrorMessage = self::validateMidocoDeferralArErOutputListForArrayConstraintFromSetMidocoDeferralArErOutputList($midocoDeferralArErOutputList))) {
            throw new InvalidArgumentException($midocoDeferralArErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoDeferralArErOutputList = $midocoDeferralArErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoDeferralArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BookDeferredArErRequest
     */
    public function addToMidocoDeferralArErOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoDeferralArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDeferralArErOutputList[] = $item;
        
        return $this;
    }
}
