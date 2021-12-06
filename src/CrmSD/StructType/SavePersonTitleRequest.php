<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePersonTitleRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: get the active mandate that is assigned to a billing document
 * @subpackage Structs
 */
class SavePersonTitleRequest extends AbstractStructBase
{
    /**
     * The PersonTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: PersonTitle
     * @var \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $PersonTitle;
    /**
     * Constructor method for SavePersonTitleRequest
     * @uses SavePersonTitleRequest::setPersonTitle()
     * @param \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle)
    {
        $this
            ->setPersonTitle($personTitle);
    }
    /**
     * Get PersonTitle value
     * @return \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
     */
    public function getPersonTitle(): \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
    {
        return $this->PersonTitle;
    }
    /**
     * Set PersonTitle value
     * @param \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePersonTitleRequest
     */
    public function setPersonTitle(\Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle): self
    {
        $this->PersonTitle = $personTitle;
        
        return $this;
    }
}
