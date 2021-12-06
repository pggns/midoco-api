<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDebitorResponse StructType
 * @subpackage Structs
 */
class SearchDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO[]
     */
    protected ?array $MidocoDebitor = null;
    /**
     * Constructor method for SearchDebitorResponse
     * @uses SearchDebitorResponse::setMidocoDebitor()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO[] $midocoDebitor
     */
    public function __construct(?array $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): ?array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDebitorResponseMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$searchDebitorResponseMidocoDebitorItem instanceof \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO) {
                $invalidValues[] = is_object($searchDebitorResponseMidocoDebitorItem) ? get_class($searchDebitorResponseMidocoDebitorItem) : sprintf('%s(%s)', gettype($searchDebitorResponseMidocoDebitorItem), var_export($searchDebitorResponseMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchDebitorResponse
     */
    public function setMidocoDebitor(?array $midocoDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchDebitorResponse
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
}
