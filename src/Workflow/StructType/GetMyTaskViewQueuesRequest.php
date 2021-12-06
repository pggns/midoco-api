<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewQueuesRequest StructType
 * @subpackage Structs
 */
class GetMyTaskViewQueuesRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskViewUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskViewUser
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser
     */
    protected \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser $MidocoTaskViewUser;
    /**
     * Constructor method for GetMyTaskViewQueuesRequest
     * @uses GetMyTaskViewQueuesRequest::setMidocoTaskViewUser()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser
     */
    public function __construct(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser)
    {
        $this
            ->setMidocoTaskViewUser($midocoTaskViewUser);
    }
    /**
     * Get MidocoTaskViewUser value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser
     */
    public function getMidocoTaskViewUser(): \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser
    {
        return $this->MidocoTaskViewUser;
    }
    /**
     * Set MidocoTaskViewUser value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMyTaskViewQueuesRequest
     */
    public function setMidocoTaskViewUser(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser): self
    {
        $this->MidocoTaskViewUser = $midocoTaskViewUser;
        
        return $this;
    }
}
