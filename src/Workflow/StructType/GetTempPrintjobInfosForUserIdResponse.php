<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTempPrintjobInfosForUserIdResponse StructType
 * @subpackage Structs
 */
class GetTempPrintjobInfosForUserIdResponse extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjobInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTempPrintjobInfo
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo[]
     */
    protected ?array $MidocoTempPrintjobInfo = null;
    /**
     * Constructor method for GetTempPrintjobInfosForUserIdResponse
     * @uses GetTempPrintjobInfosForUserIdResponse::setMidocoTempPrintjobInfo()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     */
    public function __construct(?array $midocoTempPrintjobInfo = null)
    {
        $this
            ->setMidocoTempPrintjobInfo($midocoTempPrintjobInfo);
    }
    /**
     * Get MidocoTempPrintjobInfo value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo[]
     */
    public function getMidocoTempPrintjobInfo(): ?array
    {
        return $this->MidocoTempPrintjobInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTempPrintjobInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTempPrintjobInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTempPrintjobInfoForArrayConstraintsFromSetMidocoTempPrintjobInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) {
            // validation for constraint: itemType
            if (!$getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo) {
                $invalidValues[] = is_object($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) ? get_class($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) : sprintf('%s(%s)', gettype($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem), var_export($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTempPrintjobInfosForUserIdResponse
     */
    public function setMidocoTempPrintjobInfo(?array $midocoTempPrintjobInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTempPrintjobInfoArrayErrorMessage = self::validateMidocoTempPrintjobInfoForArrayConstraintsFromSetMidocoTempPrintjobInfo($midocoTempPrintjobInfo))) {
            throw new InvalidArgumentException($midocoTempPrintjobInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoTempPrintjobInfo = $midocoTempPrintjobInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTempPrintjobInfosForUserIdResponse
     */
    public function addToMidocoTempPrintjobInfo(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTempPrintjobInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTempPrintjobInfo[] = $item;
        
        return $this;
    }
}
