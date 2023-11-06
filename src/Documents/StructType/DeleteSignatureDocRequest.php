<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSignatureDocRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSignatureDocRequest extends AbstractStructBase
{
    /**
     * The signatureDocId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $signatureDocId = null;
    /**
     * Constructor method for DeleteSignatureDocRequest
     * @uses DeleteSignatureDocRequest::setSignatureDocId()
     * @param int[] $signatureDocId
     */
    public function __construct(?array $signatureDocId = null)
    {
        $this
            ->setSignatureDocId($signatureDocId);
    }
    /**
     * Get signatureDocId value
     * @return int[]
     */
    public function getSignatureDocId(): ?array
    {
        return $this->signatureDocId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSignatureDocId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatureDocId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatureDocIdForArrayConstraintFromSetSignatureDocId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteSignatureDocRequestSignatureDocIdItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteSignatureDocRequestSignatureDocIdItem) || ctype_digit($deleteSignatureDocRequestSignatureDocIdItem))) {
                $invalidValues[] = is_object($deleteSignatureDocRequestSignatureDocIdItem) ? get_class($deleteSignatureDocRequestSignatureDocIdItem) : sprintf('%s(%s)', gettype($deleteSignatureDocRequestSignatureDocIdItem), var_export($deleteSignatureDocRequestSignatureDocIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The signatureDocId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set signatureDocId value
     * @throws InvalidArgumentException
     * @param int[] $signatureDocId
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSignatureDocRequest
     */
    public function setSignatureDocId(?array $signatureDocId = null): self
    {
        // validation for constraint: array
        if ('' !== ($signatureDocIdArrayErrorMessage = self::validateSignatureDocIdForArrayConstraintFromSetSignatureDocId($signatureDocId))) {
            throw new InvalidArgumentException($signatureDocIdArrayErrorMessage, __LINE__);
        }
        $this->signatureDocId = $signatureDocId;
        
        return $this;
    }
    /**
     * Add item to signatureDocId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSignatureDocRequest
     */
    public function addToSignatureDocId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The signatureDocId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->signatureDocId[] = $item;
        
        return $this;
    }
}
