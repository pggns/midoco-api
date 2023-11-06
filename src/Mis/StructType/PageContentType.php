<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PageContentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PageContentType extends AbstractStructBase
{
    /**
     * The MidocoCampaignRow
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignRow
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignRowType[]
     */
    protected ?array $MidocoCampaignRow = null;
    /**
     * Constructor method for PageContentType
     * @uses PageContentType::setMidocoCampaignRow()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignRowType[] $midocoCampaignRow
     */
    public function __construct(?array $midocoCampaignRow = null)
    {
        $this
            ->setMidocoCampaignRow($midocoCampaignRow);
    }
    /**
     * Get MidocoCampaignRow value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignRowType[]
     */
    public function getMidocoCampaignRow(): ?array
    {
        return $this->MidocoCampaignRow;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCampaignRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignRow method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignRowForArrayConstraintFromSetMidocoCampaignRow(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pageContentTypeMidocoCampaignRowItem) {
            // validation for constraint: itemType
            if (!$pageContentTypeMidocoCampaignRowItem instanceof \Pggns\MidocoApi\Mis\StructType\CampaignRowType) {
                $invalidValues[] = is_object($pageContentTypeMidocoCampaignRowItem) ? get_class($pageContentTypeMidocoCampaignRowItem) : sprintf('%s(%s)', gettype($pageContentTypeMidocoCampaignRowItem), var_export($pageContentTypeMidocoCampaignRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignRow property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignRowType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignRow value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignRowType[] $midocoCampaignRow
     * @return \Pggns\MidocoApi\Mis\StructType\PageContentType
     */
    public function setMidocoCampaignRow(?array $midocoCampaignRow = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignRowArrayErrorMessage = self::validateMidocoCampaignRowForArrayConstraintFromSetMidocoCampaignRow($midocoCampaignRow))) {
            throw new InvalidArgumentException($midocoCampaignRowArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignRow = $midocoCampaignRow;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignRow value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignRowType $item
     * @return \Pggns\MidocoApi\Mis\StructType\PageContentType
     */
    public function addToMidocoCampaignRow(\Pggns\MidocoApi\Mis\StructType\CampaignRowType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CampaignRowType) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignRow property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignRowType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignRow[] = $item;
        
        return $this;
    }
}
