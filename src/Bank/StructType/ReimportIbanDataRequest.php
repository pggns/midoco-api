<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReimportIbanDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReimportIbanDataRequest extends AbstractStructBase
{
    /**
     * The IBANImportExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: IBANImportExport
     * @var \Pggns\MidocoApi\Bank\StructType\IBANImportExport[]
     */
    protected ?array $IBANImportExport = null;
    /**
     * The generateMandates
     * @var bool|null
     */
    protected ?bool $generateMandates = null;
    /**
     * Constructor method for ReimportIbanDataRequest
     * @uses ReimportIbanDataRequest::setIBANImportExport()
     * @uses ReimportIbanDataRequest::setGenerateMandates()
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport[] $iBANImportExport
     * @param bool $generateMandates
     */
    public function __construct(?array $iBANImportExport = null, ?bool $generateMandates = null)
    {
        $this
            ->setIBANImportExport($iBANImportExport)
            ->setGenerateMandates($generateMandates);
    }
    /**
     * Get IBANImportExport value
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport[]
     */
    public function getIBANImportExport(): ?array
    {
        return $this->IBANImportExport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIBANImportExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIBANImportExport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIBANImportExportForArrayConstraintFromSetIBANImportExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $reimportIbanDataRequestIBANImportExportItem) {
            // validation for constraint: itemType
            if (!$reimportIbanDataRequestIBANImportExportItem instanceof \Pggns\MidocoApi\Bank\StructType\IBANImportExport) {
                $invalidValues[] = is_object($reimportIbanDataRequestIBANImportExportItem) ? get_class($reimportIbanDataRequestIBANImportExportItem) : sprintf('%s(%s)', gettype($reimportIbanDataRequestIBANImportExportItem), var_export($reimportIbanDataRequestIBANImportExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IBANImportExport property can only contain items of type \Pggns\MidocoApi\Bank\StructType\IBANImportExport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IBANImportExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport[] $iBANImportExport
     * @return \Pggns\MidocoApi\Bank\StructType\ReimportIbanDataRequest
     */
    public function setIBANImportExport(?array $iBANImportExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($iBANImportExportArrayErrorMessage = self::validateIBANImportExportForArrayConstraintFromSetIBANImportExport($iBANImportExport))) {
            throw new InvalidArgumentException($iBANImportExportArrayErrorMessage, __LINE__);
        }
        $this->IBANImportExport = $iBANImportExport;
        
        return $this;
    }
    /**
     * Add item to IBANImportExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport $item
     * @return \Pggns\MidocoApi\Bank\StructType\ReimportIbanDataRequest
     */
    public function addToIBANImportExport(\Pggns\MidocoApi\Bank\StructType\IBANImportExport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\IBANImportExport) {
            throw new InvalidArgumentException(sprintf('The IBANImportExport property can only contain items of type \Pggns\MidocoApi\Bank\StructType\IBANImportExport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IBANImportExport[] = $item;
        
        return $this;
    }
    /**
     * Get generateMandates value
     * @return bool|null
     */
    public function getGenerateMandates(): ?bool
    {
        return $this->generateMandates;
    }
    /**
     * Set generateMandates value
     * @param bool $generateMandates
     * @return \Pggns\MidocoApi\Bank\StructType\ReimportIbanDataRequest
     */
    public function setGenerateMandates(?bool $generateMandates = null): self
    {
        // validation for constraint: boolean
        if (!is_null($generateMandates) && !is_bool($generateMandates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateMandates, true), gettype($generateMandates)), __LINE__);
        }
        $this->generateMandates = $generateMandates;
        
        return $this;
    }
}
