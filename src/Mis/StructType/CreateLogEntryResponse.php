<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLogEntryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: createLogEntry --- adds a new entry to the log. The entry consists of a message, a timestamp, a severity, an application and the source/destination database names
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateLogEntryResponse extends AbstractStructBase
{
}
