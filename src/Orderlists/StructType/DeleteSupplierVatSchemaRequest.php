<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierVatSchemaRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierVatSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierVatSchema
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO $MidocoSupplierVatSchema = null;
    /**
     * Constructor method for DeleteSupplierVatSchemaRequest
     * @uses DeleteSupplierVatSchemaRequest::setMidocoSupplierVatSchema()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null)
    {
        $this
            ->setMidocoSupplierVatSchema($midocoSupplierVatSchema);
    }
    /**
     * Get MidocoSupplierVatSchema value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO|null
     */
    public function getMidocoSupplierVatSchema(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO
    {
        return $this->MidocoSupplierVatSchema;
    }
    /**
     * Set MidocoSupplierVatSchema value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteSupplierVatSchemaRequest
     */
    public function setMidocoSupplierVatSchema(?\Pggns\MidocoApi\Orderlists\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null): self
    {
        $this->MidocoSupplierVatSchema = $midocoSupplierVatSchema;
        
        return $this;
    }
}
