<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiUpdateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiUpdateResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for GetDbiUpdateResponse
     * @uses GetDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
