<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMisCampaignDocumentsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDocuments --- returns the list of documents corresponding to a campaign having the id CampaignId
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMisCampaignDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignDocument
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO[]
     */
    protected ?array $MidocoMisCampaignDocument = null;
    /**
     * Constructor method for GetMisCampaignDocumentsResponse
     * @uses GetMisCampaignDocumentsResponse::setMidocoMisCampaignDocument()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO[] $midocoMisCampaignDocument
     */
    public function __construct(?array $midocoMisCampaignDocument = null)
    {
        $this
            ->setMidocoMisCampaignDocument($midocoMisCampaignDocument);
    }
    /**
     * Get MidocoMisCampaignDocument value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO[]
     */
    public function getMidocoMisCampaignDocument(): ?array
    {
        return $this->MidocoMisCampaignDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignDocumentForArrayConstraintFromSetMidocoMisCampaignDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem) {
            // validation for constraint: itemType
            if (!$getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO) {
                $invalidValues[] = is_object($getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem) ? get_class($getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem) : sprintf('%s(%s)', gettype($getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem), var_export($getMisCampaignDocumentsResponseMidocoMisCampaignDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignDocument property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO[] $midocoMisCampaignDocument
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsResponse
     */
    public function setMidocoMisCampaignDocument(?array $midocoMisCampaignDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignDocumentArrayErrorMessage = self::validateMidocoMisCampaignDocumentForArrayConstraintFromSetMidocoMisCampaignDocument($midocoMisCampaignDocument))) {
            throw new InvalidArgumentException($midocoMisCampaignDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignDocument = $midocoMisCampaignDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsResponse
     */
    public function addToMidocoMisCampaignDocument(\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignDocument property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignDocument[] = $item;
        
        return $this;
    }
}
