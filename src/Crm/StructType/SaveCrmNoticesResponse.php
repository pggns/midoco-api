<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmNoticesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCrmNotice --- saves a notice (or more) for a customer
 * @subpackage Structs
 */
class SaveCrmNoticesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCrmNoticesResponse
     * @uses SaveCrmNoticesResponse::setMidocoCrmNotice()
     * @uses SaveCrmNoticesResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param int $internalVersion
     */
    public function __construct(?array $midocoCrmNotice = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): ?array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCrmNoticesResponseMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$saveCrmNoticesResponseMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($saveCrmNoticesResponseMidocoCrmNoticeItem) ? get_class($saveCrmNoticesResponseMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($saveCrmNoticesResponseMidocoCrmNoticeItem), var_export($saveCrmNoticesResponseMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmNoticesResponse
     */
    public function setMidocoCrmNotice(?array $midocoCrmNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmNoticesResponse
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmNoticesResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
