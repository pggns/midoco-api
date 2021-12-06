<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactMediaListResponse StructType
 * @subpackage Structs
 */
class GetContactMediaListResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO[]
     */
    protected ?array $MidocoContactMedia = null;
    /**
     * Constructor method for GetContactMediaListResponse
     * @uses GetContactMediaListResponse::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO[] $midocoContactMedia
     */
    public function __construct(?array $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO[]
     */
    public function getMidocoContactMedia(): ?array
    {
        return $this->MidocoContactMedia;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactMedia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactMedia method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactMediaForArrayConstraintsFromSetMidocoContactMedia(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContactMediaListResponseMidocoContactMediaItem) {
            // validation for constraint: itemType
            if (!$getContactMediaListResponseMidocoContactMediaItem instanceof \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO) {
                $invalidValues[] = is_object($getContactMediaListResponseMidocoContactMediaItem) ? get_class($getContactMediaListResponseMidocoContactMediaItem) : sprintf('%s(%s)', gettype($getContactMediaListResponseMidocoContactMediaItem), var_export($getContactMediaListResponseMidocoContactMediaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactMedia property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactMedia value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO[] $midocoContactMedia
     * @return \Pggns\MidocoApi\Documents\StructType\GetContactMediaListResponse
     */
    public function setMidocoContactMedia(?array $midocoContactMedia = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactMediaArrayErrorMessage = self::validateMidocoContactMediaForArrayConstraintsFromSetMidocoContactMedia($midocoContactMedia))) {
            throw new InvalidArgumentException($midocoContactMediaArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
    /**
     * Add item to MidocoContactMedia value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetContactMediaListResponse
     */
    public function addToMidocoContactMedia(\Pggns\MidocoApi\Documents\StructType\ContactMediaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoContactMedia property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ContactMediaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactMedia[] = $item;
        
        return $this;
    }
}
