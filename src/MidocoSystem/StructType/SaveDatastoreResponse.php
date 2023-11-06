<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDatastoreResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDatastoreResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SaveDatastoreResponse
     * @uses SaveDatastoreResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveDatastoreResponse
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\MidocoSystem\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
