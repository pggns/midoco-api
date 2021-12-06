<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDatastoreResponse StructType
 * @subpackage Structs
 */
class SaveDatastoreResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SaveDatastoreResponse
     * @uses SaveDatastoreResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveDatastoreResponse
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Orderlists\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
