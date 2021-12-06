<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcProxyTargetResponse StructType
 * @subpackage Structs
 */
class GetCcProxyTargetResponse extends AbstractStructBase
{
    /**
     * The MidocoCcProxyTarget
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCcProxyTarget
     * @var \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget[]
     */
    protected ?array $MidocoCcProxyTarget = null;
    /**
     * Constructor method for GetCcProxyTargetResponse
     * @uses GetCcProxyTargetResponse::setMidocoCcProxyTarget()
     * @param \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget[] $midocoCcProxyTarget
     */
    public function __construct(?array $midocoCcProxyTarget = null)
    {
        $this
            ->setMidocoCcProxyTarget($midocoCcProxyTarget);
    }
    /**
     * Get MidocoCcProxyTarget value
     * @return \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget[]
     */
    public function getMidocoCcProxyTarget(): ?array
    {
        return $this->MidocoCcProxyTarget;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCcProxyTarget method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcProxyTarget method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcProxyTargetForArrayConstraintsFromSetMidocoCcProxyTarget(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCcProxyTargetResponseMidocoCcProxyTargetItem) {
            // validation for constraint: itemType
            if (!$getCcProxyTargetResponseMidocoCcProxyTargetItem instanceof \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget) {
                $invalidValues[] = is_object($getCcProxyTargetResponseMidocoCcProxyTargetItem) ? get_class($getCcProxyTargetResponseMidocoCcProxyTargetItem) : sprintf('%s(%s)', gettype($getCcProxyTargetResponseMidocoCcProxyTargetItem), var_export($getCcProxyTargetResponseMidocoCcProxyTargetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcProxyTarget property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcProxyTarget value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget[] $midocoCcProxyTarget
     * @return \Pggns\MidocoApi\System\StructType\GetCcProxyTargetResponse
     */
    public function setMidocoCcProxyTarget(?array $midocoCcProxyTarget = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcProxyTargetArrayErrorMessage = self::validateMidocoCcProxyTargetForArrayConstraintsFromSetMidocoCcProxyTarget($midocoCcProxyTarget))) {
            throw new InvalidArgumentException($midocoCcProxyTargetArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcProxyTarget = $midocoCcProxyTarget;
        
        return $this;
    }
    /**
     * Add item to MidocoCcProxyTarget value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget $item
     * @return \Pggns\MidocoApi\System\StructType\GetCcProxyTargetResponse
     */
    public function addToMidocoCcProxyTarget(\Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget) {
            throw new InvalidArgumentException(sprintf('The MidocoCcProxyTarget property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcProxyTarget[] = $item;
        
        return $this;
    }
}
