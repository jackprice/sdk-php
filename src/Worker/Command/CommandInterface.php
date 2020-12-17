<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Worker\Command;

use Temporal\Client\Internal\Repository\Identifiable;

interface CommandInterface extends Identifiable
{
    /**
     * @return int
     */
    public function getId(): int;
}