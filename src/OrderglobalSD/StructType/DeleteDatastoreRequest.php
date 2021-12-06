<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDatastoreRequest StructType
 * @subpackage Structs
 */
class DeleteDatastoreRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for DeleteDatastoreRequest
     * @uses DeleteDatastoreRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDatastoreRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
