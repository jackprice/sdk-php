<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Internal\Transport\Request;

use Temporal\Client\Worker\Command\Request;

final class ExecuteActivity extends Request
{
    /**
     * @var string
     */
    public const NAME = 'ExecuteActivity';

    /**
     * @param string $name
     * @param array $arguments
     * @param array $options
     */
    public function __construct(string $name, array $arguments, array $options)
    {
        parent::__construct(self::NAME, [
            'name'      => $name,
            'arguments' => $arguments,
            'options'   => $options,
        ]);
    }
}