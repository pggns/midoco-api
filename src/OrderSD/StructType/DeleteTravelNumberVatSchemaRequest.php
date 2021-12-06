<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelNumberVatSchemaRequest StructType
 * @subpackage Structs
 */
class DeleteTravelNumberVatSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberVatSchema
     * @var \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO $MidocoTravelNumberVatSchema = null;
    /**
     * Constructor method for DeleteTravelNumberVatSchemaRequest
     * @uses DeleteTravelNumberVatSchemaRequest::setMidocoTravelNumberVatSchema()
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null)
    {
        $this
            ->setMidocoTravelNumberVatSchema($midocoTravelNumberVatSchema);
    }
    /**
     * Get MidocoTravelNumberVatSchema value
     * @return \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO|null
     */
    public function getMidocoTravelNumberVatSchema(): ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO
    {
        return $this->MidocoTravelNumberVatSchema;
    }
    /**
     * Set MidocoTravelNumberVatSchema value
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberVatSchemaRequest
     */
    public function setMidocoTravelNumberVatSchema(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null): self
    {
        $this->MidocoTravelNumberVatSchema = $midocoTravelNumberVatSchema;
        
        return $this;
    }
}
