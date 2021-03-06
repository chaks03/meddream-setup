<?php

namespace Softneta\MedDream\Core\Pacs\Filesystem;

use Softneta\MedDream\Core\Pacs\SharedIface;
use Softneta\MedDream\Core\Pacs\SharedAbstract;


/** @brief Implementation of SharedIface for <tt>$pacs='FileSystem'</tt>.

	This class is empty as SharedAbstract provides enough functionality.
	In turn, Loader::load() still expects a file.
 */
class PacsPartShared extends SharedAbstract implements SharedIface
{
}
