<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleCriteriaCrmResponse StructType
 * @subpackage Structs
 */
class ListRuleCriteriaCrmResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleCriteriaCrm
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO[]
     */
    protected ?array $MidocoRuleCriteriaCrm = null;
    /**
     * Constructor method for ListRuleCriteriaCrmResponse
     * @uses ListRuleCriteriaCrmResponse::setMidocoRuleCriteriaCrm()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO[] $midocoRuleCriteriaCrm
     */
    public function __construct(?array $midocoRuleCriteriaCrm = null)
    {
        $this
            ->setMidocoRuleCriteriaCrm($midocoRuleCriteriaCrm);
    }
    /**
     * Get MidocoRuleCriteriaCrm value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO[]
     */
    public function getMidocoRuleCriteriaCrm(): ?array
    {
        return $this->MidocoRuleCriteriaCrm;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRuleCriteriaCrm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleCriteriaCrm method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleCriteriaCrmForArrayConstraintsFromSetMidocoRuleCriteriaCrm(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem) {
            // validation for constraint: itemType
            if (!$listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO) {
                $invalidValues[] = is_object($listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem) ? get_class($listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem) : sprintf('%s(%s)', gettype($listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem), var_export($listRuleCriteriaCrmResponseMidocoRuleCriteriaCrmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleCriteriaCrm property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleCriteriaCrm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO[] $midocoRuleCriteriaCrm
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaCrmResponse
     */
    public function setMidocoRuleCriteriaCrm(?array $midocoRuleCriteriaCrm = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleCriteriaCrmArrayErrorMessage = self::validateMidocoRuleCriteriaCrmForArrayConstraintsFromSetMidocoRuleCriteriaCrm($midocoRuleCriteriaCrm))) {
            throw new InvalidArgumentException($midocoRuleCriteriaCrmArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleCriteriaCrm = $midocoRuleCriteriaCrm;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleCriteriaCrm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\ListRuleCriteriaCrmResponse
     */
    public function addToMidocoRuleCriteriaCrm(\Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleCriteriaCrm property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\RuleCriteriaCrmDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleCriteriaCrm[] = $item;
        
        return $this;
    }
}
