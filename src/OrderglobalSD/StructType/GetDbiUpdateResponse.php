<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiUpdateResponse StructType
 * @subpackage Structs
 */
class GetDbiUpdateResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for GetDbiUpdateResponse
     * @uses GetDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
