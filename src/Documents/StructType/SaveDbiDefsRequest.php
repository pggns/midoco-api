<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDbiDefsRequest StructType
 * @subpackage Structs
 */
class SaveDbiDefsRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiDefs
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiDefs
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs $MidocoDbiDefs = null;
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for SaveDbiDefsRequest
     * @uses SaveDbiDefsRequest::setMidocoDbiDefs()
     * @uses SaveDbiDefsRequest::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs $midocoDbiDefs
     * @param \Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs $midocoDbiDefs = null, ?\Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiDefs($midocoDbiDefs)
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiDefs value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs|null
     */
    public function getMidocoDbiDefs(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs
    {
        return $this->MidocoDbiDefs;
    }
    /**
     * Set MidocoDbiDefs value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs $midocoDbiDefs
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiDefs(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefs $midocoDbiDefs = null): self
    {
        $this->MidocoDbiDefs = $midocoDbiDefs;
        
        return $this;
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Api\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
