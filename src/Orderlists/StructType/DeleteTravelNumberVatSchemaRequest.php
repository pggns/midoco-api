<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO $MidocoTravelNumberVatSchema = null;
    /**
     * Constructor method for DeleteTravelNumberVatSchemaRequest
     * @uses DeleteTravelNumberVatSchemaRequest::setMidocoTravelNumberVatSchema()
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null)
    {
        $this
            ->setMidocoTravelNumberVatSchema($midocoTravelNumberVatSchema);
    }
    /**
     * Get MidocoTravelNumberVatSchema value
     * @return \Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO|null
     */
    public function getMidocoTravelNumberVatSchema(): ?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO
    {
        return $this->MidocoTravelNumberVatSchema;
    }
    /**
     * Set MidocoTravelNumberVatSchema value
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteTravelNumberVatSchemaRequest
     */
    public function setMidocoTravelNumberVatSchema(?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null): self
    {
        $this->MidocoTravelNumberVatSchema = $midocoTravelNumberVatSchema;
        
        return $this;
    }
}
