<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoMandateResponse StructType
 * @subpackage Structs
 */
class SearchMidocoMandateResponse extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate[]
     */
    protected array $MidocoMandate = [];
    /**
     * Constructor method for SearchMidocoMandateResponse
     * @uses SearchMidocoMandateResponse::setMidocoMandate()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate[] $midocoMandate
     */
    public function __construct(array $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate[]
     */
    public function getMidocoMandate(): array
    {
        return $this->MidocoMandate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMandate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateForArrayConstraintsFromSetMidocoMandate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMidocoMandateResponseMidocoMandateItem) {
            // validation for constraint: itemType
            if (!$searchMidocoMandateResponseMidocoMandateItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate) {
                $invalidValues[] = is_object($searchMidocoMandateResponseMidocoMandateItem) ? get_class($searchMidocoMandateResponseMidocoMandateItem) : sprintf('%s(%s)', gettype($searchMidocoMandateResponseMidocoMandateItem), var_export($searchMidocoMandateResponseMidocoMandateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate[] $midocoMandate
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchMidocoMandateResponse
     */
    public function setMidocoMandate(array $midocoMandate): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateArrayErrorMessage = self::validateMidocoMandateForArrayConstraintsFromSetMidocoMandate($midocoMandate))) {
            throw new InvalidArgumentException($midocoMandateArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Add item to MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchMidocoMandateResponse
     */
    public function addToMidocoMandate(\Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate) {
            throw new InvalidArgumentException(sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandate[] = $item;
        
        return $this;
    }
}
