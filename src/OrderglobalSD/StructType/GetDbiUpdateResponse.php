<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for GetDbiUpdateResponse
     * @uses GetDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
