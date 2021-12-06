<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAddressResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteAddress --- test if address is referenced in an order, if not delete address record and make default address null if this was the default address
 * @subpackage Structs
 */
class DeleteAddressResponse extends AbstractStructBase
{
}
