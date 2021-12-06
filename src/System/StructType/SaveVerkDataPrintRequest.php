<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVerkDataPrintRequest StructType
 * @subpackage Structs
 */
class SaveVerkDataPrintRequest extends AbstractStructBase
{
    /**
     * The MidocoVerkDataPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoVerkDataPrint
     * @var \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO[]
     */
    protected ?array $MidocoVerkDataPrint = null;
    /**
     * Constructor method for SaveVerkDataPrintRequest
     * @uses SaveVerkDataPrintRequest::setMidocoVerkDataPrint()
     * @param \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     */
    public function __construct(?array $midocoVerkDataPrint = null)
    {
        $this
            ->setMidocoVerkDataPrint($midocoVerkDataPrint);
    }
    /**
     * Get MidocoVerkDataPrint value
     * @return \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO[]
     */
    public function getMidocoVerkDataPrint(): ?array
    {
        return $this->MidocoVerkDataPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVerkDataPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVerkDataPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVerkDataPrintForArrayConstraintsFromSetMidocoVerkDataPrint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveVerkDataPrintRequestMidocoVerkDataPrintItem) {
            // validation for constraint: itemType
            if (!$saveVerkDataPrintRequestMidocoVerkDataPrintItem instanceof \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO) {
                $invalidValues[] = is_object($saveVerkDataPrintRequestMidocoVerkDataPrintItem) ? get_class($saveVerkDataPrintRequestMidocoVerkDataPrintItem) : sprintf('%s(%s)', gettype($saveVerkDataPrintRequestMidocoVerkDataPrintItem), var_export($saveVerkDataPrintRequestMidocoVerkDataPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     * @return \Pggns\MidocoApi\System\StructType\SaveVerkDataPrintRequest
     */
    public function setMidocoVerkDataPrint(?array $midocoVerkDataPrint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVerkDataPrintArrayErrorMessage = self::validateMidocoVerkDataPrintForArrayConstraintsFromSetMidocoVerkDataPrint($midocoVerkDataPrint))) {
            throw new InvalidArgumentException($midocoVerkDataPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoVerkDataPrint = $midocoVerkDataPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO $item
     * @return \Pggns\MidocoApi\System\StructType\SaveVerkDataPrintRequest
     */
    public function addToMidocoVerkDataPrint(\Pggns\MidocoApi\System\StructType\VerkDataPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\System\StructType\VerkDataPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVerkDataPrint[] = $item;
        
        return $this;
    }
}
