<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDatastoreResponse StructType
 * @subpackage Structs
 */
class DeleteDatastoreResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Crm\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for DeleteDatastoreResponse
     * @uses DeleteDatastoreResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Crm\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Crm\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Crm\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Crm\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteDatastoreResponse
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Crm\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
