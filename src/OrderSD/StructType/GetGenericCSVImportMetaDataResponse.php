<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGenericCSVImportMetaDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGenericCSVImportMetaDataResponse extends AbstractStructBase
{
    /**
     * The MidocoGenericCsvImportMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoGenericCsvImportMetadata
     * @var \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $MidocoGenericCsvImportMetadata = null;
    /**
     * Constructor method for GetGenericCSVImportMetaDataResponse
     * @uses GetGenericCSVImportMetaDataResponse::setMidocoGenericCsvImportMetadata()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null)
    {
        $this
            ->setMidocoGenericCsvImportMetadata($midocoGenericCsvImportMetadata);
    }
    /**
     * Get MidocoGenericCsvImportMetadata value
     * @return \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO|null
     */
    public function getMidocoGenericCsvImportMetadata(): ?\Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO
    {
        return $this->MidocoGenericCsvImportMetadata;
    }
    /**
     * Set MidocoGenericCsvImportMetadata value
     * @param \Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetGenericCSVImportMetaDataResponse
     */
    public function setMidocoGenericCsvImportMetadata(?\Pggns\MidocoApi\OrderSD\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null): self
    {
        $this->MidocoGenericCsvImportMetadata = $midocoGenericCsvImportMetadata;
        
        return $this;
    }
}
