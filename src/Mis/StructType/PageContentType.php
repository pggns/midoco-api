<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PageContentType StructType
 * @subpackage Structs
 */
class PageContentType extends AbstractStructBase
{
    /**
     * The MidocoCampaignRow
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignRow
     * @var \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType[]
     */
    protected ?array $MidocoCampaignRow = null;
    /**
     * Constructor method for PageContentType
     * @uses PageContentType::setMidocoCampaignRow()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType[] $midocoCampaignRow
     */
    public function __construct(?array $midocoCampaignRow = null)
    {
        $this
            ->setMidocoCampaignRow($midocoCampaignRow);
    }
    /**
     * Get MidocoCampaignRow value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType[]
     */
    public function getMidocoCampaignRow(): ?array
    {
        return $this->MidocoCampaignRow;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCampaignRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignRow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignRowForArrayConstraintsFromSetMidocoCampaignRow(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pageContentTypeMidocoCampaignRowItem) {
            // validation for constraint: itemType
            if (!$pageContentTypeMidocoCampaignRowItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType) {
                $invalidValues[] = is_object($pageContentTypeMidocoCampaignRowItem) ? get_class($pageContentTypeMidocoCampaignRowItem) : sprintf('%s(%s)', gettype($pageContentTypeMidocoCampaignRowItem), var_export($pageContentTypeMidocoCampaignRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignRow property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignRow value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType[] $midocoCampaignRow
     * @return \Pggns\MidocoApi\Api\Mis\StructType\PageContentType
     */
    public function setMidocoCampaignRow(?array $midocoCampaignRow = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignRowArrayErrorMessage = self::validateMidocoCampaignRowForArrayConstraintsFromSetMidocoCampaignRow($midocoCampaignRow))) {
            throw new InvalidArgumentException($midocoCampaignRowArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignRow = $midocoCampaignRow;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignRow value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\PageContentType
     */
    public function addToMidocoCampaignRow(\Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignRow property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\CampaignRowType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignRow[] = $item;
        
        return $this;
    }
}
