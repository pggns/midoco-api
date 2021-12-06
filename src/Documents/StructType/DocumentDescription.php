<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentDescription StructType
 * @subpackage Structs
 */
class DocumentDescription extends AbstractStructBase
{
    /**
     * The OrderDocument
     * Meta information extracted from the WSDL
     * - choice: OrderDocument | CrmDocument | FinancialDocument | DiversDocument
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: OrderDocument
     * @var \Pggns\MidocoApi\Documents\StructType\OrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrderDocument $OrderDocument = null;
    /**
     * The CrmDocument
     * Meta information extracted from the WSDL
     * - choice: OrderDocument | CrmDocument | FinancialDocument | DiversDocument
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: CrmDocument
     * @var \Pggns\MidocoApi\Documents\StructType\CrmDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CrmDocument $CrmDocument = null;
    /**
     * The FinancialDocument
     * Meta information extracted from the WSDL
     * - choice: OrderDocument | CrmDocument | FinancialDocument | DiversDocument
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: FinancialDocument
     * @var \Pggns\MidocoApi\Documents\StructType\FinancialDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\FinancialDocument $FinancialDocument = null;
    /**
     * The DiversDocument
     * Meta information extracted from the WSDL
     * - choice: OrderDocument | CrmDocument | FinancialDocument | DiversDocument
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: DiversDocument
     * @var \Pggns\MidocoApi\Documents\StructType\DiversDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DiversDocument $DiversDocument = null;
    /**
     * Constructor method for DocumentDescription
     * @uses DocumentDescription::setOrderDocument()
     * @uses DocumentDescription::setCrmDocument()
     * @uses DocumentDescription::setFinancialDocument()
     * @uses DocumentDescription::setDiversDocument()
     * @param \Pggns\MidocoApi\Documents\StructType\OrderDocument $orderDocument
     * @param \Pggns\MidocoApi\Documents\StructType\CrmDocument $crmDocument
     * @param \Pggns\MidocoApi\Documents\StructType\FinancialDocument $financialDocument
     * @param \Pggns\MidocoApi\Documents\StructType\DiversDocument $diversDocument
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrderDocument $orderDocument = null, ?\Pggns\MidocoApi\Documents\StructType\CrmDocument $crmDocument = null, ?\Pggns\MidocoApi\Documents\StructType\FinancialDocument $financialDocument = null, ?\Pggns\MidocoApi\Documents\StructType\DiversDocument $diversDocument = null)
    {
        $this
            ->setOrderDocument($orderDocument)
            ->setCrmDocument($crmDocument)
            ->setFinancialDocument($financialDocument)
            ->setDiversDocument($diversDocument);
    }
    /**
     * Get OrderDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument|null
     */
    public function getOrderDocument(): ?\Pggns\MidocoApi\Documents\StructType\OrderDocument
    {
        return isset($this->OrderDocument) ? $this->OrderDocument : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOrderDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderDocument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOrderDocumentForChoiceConstraintsFromSetOrderDocument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CrmDocument',
            'FinancialDocument',
            'DiversDocument',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property OrderDocument can\'t be set as the property %s is already set. Only one property must be set among these properties: OrderDocument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set OrderDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\OrderDocument $orderDocument
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentDescription
     */
    public function setOrderDocument(?\Pggns\MidocoApi\Documents\StructType\OrderDocument $orderDocument = null): self
    {
        // validation for constraint: choice(OrderDocument, CrmDocument, FinancialDocument, DiversDocument)
        if ('' !== ($orderDocumentChoiceErrorMessage = self::validateOrderDocumentForChoiceConstraintsFromSetOrderDocument($orderDocument))) {
            throw new InvalidArgumentException($orderDocumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($orderDocument) || (is_array($orderDocument) && empty($orderDocument))) {
            unset($this->OrderDocument);
        } else {
            $this->OrderDocument = $orderDocument;
        }
        
        return $this;
    }
    /**
     * Get CrmDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\CrmDocument|null
     */
    public function getCrmDocument(): ?\Pggns\MidocoApi\Documents\StructType\CrmDocument
    {
        return isset($this->CrmDocument) ? $this->CrmDocument : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCrmDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrmDocument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCrmDocumentForChoiceConstraintsFromSetCrmDocument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OrderDocument',
            'FinancialDocument',
            'DiversDocument',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CrmDocument can\'t be set as the property %s is already set. Only one property must be set among these properties: CrmDocument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CrmDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CrmDocument $crmDocument
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentDescription
     */
    public function setCrmDocument(?\Pggns\MidocoApi\Documents\StructType\CrmDocument $crmDocument = null): self
    {
        // validation for constraint: choice(OrderDocument, CrmDocument, FinancialDocument, DiversDocument)
        if ('' !== ($crmDocumentChoiceErrorMessage = self::validateCrmDocumentForChoiceConstraintsFromSetCrmDocument($crmDocument))) {
            throw new InvalidArgumentException($crmDocumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($crmDocument) || (is_array($crmDocument) && empty($crmDocument))) {
            unset($this->CrmDocument);
        } else {
            $this->CrmDocument = $crmDocument;
        }
        
        return $this;
    }
    /**
     * Get FinancialDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument|null
     */
    public function getFinancialDocument(): ?\Pggns\MidocoApi\Documents\StructType\FinancialDocument
    {
        return isset($this->FinancialDocument) ? $this->FinancialDocument : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFinancialDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFinancialDocument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFinancialDocumentForChoiceConstraintsFromSetFinancialDocument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OrderDocument',
            'CrmDocument',
            'DiversDocument',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FinancialDocument can\'t be set as the property %s is already set. Only one property must be set among these properties: FinancialDocument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FinancialDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\FinancialDocument $financialDocument
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentDescription
     */
    public function setFinancialDocument(?\Pggns\MidocoApi\Documents\StructType\FinancialDocument $financialDocument = null): self
    {
        // validation for constraint: choice(OrderDocument, CrmDocument, FinancialDocument, DiversDocument)
        if ('' !== ($financialDocumentChoiceErrorMessage = self::validateFinancialDocumentForChoiceConstraintsFromSetFinancialDocument($financialDocument))) {
            throw new InvalidArgumentException($financialDocumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($financialDocument) || (is_array($financialDocument) && empty($financialDocument))) {
            unset($this->FinancialDocument);
        } else {
            $this->FinancialDocument = $financialDocument;
        }
        
        return $this;
    }
    /**
     * Get DiversDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\DiversDocument|null
     */
    public function getDiversDocument(): ?\Pggns\MidocoApi\Documents\StructType\DiversDocument
    {
        return isset($this->DiversDocument) ? $this->DiversDocument : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDiversDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiversDocument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDiversDocumentForChoiceConstraintsFromSetDiversDocument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OrderDocument',
            'CrmDocument',
            'FinancialDocument',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DiversDocument can\'t be set as the property %s is already set. Only one property must be set among these properties: DiversDocument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DiversDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DiversDocument $diversDocument
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentDescription
     */
    public function setDiversDocument(?\Pggns\MidocoApi\Documents\StructType\DiversDocument $diversDocument = null): self
    {
        // validation for constraint: choice(OrderDocument, CrmDocument, FinancialDocument, DiversDocument)
        if ('' !== ($diversDocumentChoiceErrorMessage = self::validateDiversDocumentForChoiceConstraintsFromSetDiversDocument($diversDocument))) {
            throw new InvalidArgumentException($diversDocumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($diversDocument) || (is_array($diversDocument) && empty($diversDocument))) {
            unset($this->DiversDocument);
        } else {
            $this->DiversDocument = $diversDocument;
        }
        
        return $this;
    }
}
