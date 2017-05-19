<?php

declare(strict_types=1);

/*
 * This file is part of YouTrack REST PHP.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\YouTrack\Rest\Authorizer\Contracts;

use Cog\YouTrack\Rest\Client\Contracts\Client as ClientContract;

/**
 * Interface Authorizer.
 *
 * @package Cog\YouTrack\Rest\Authorizer\Contracts
 */
interface Authorizer
{
    /**
     * Returns authorization headers.
     *
     * @return array
     */
    public function getHeaders(): array;

    /**
     * Authenticate API Client.
     *
     * @param \Cog\YouTrack\Rest\Client\Contracts\Client $client
     * @return void
     */
    public function authenticate(ClientContract $client): void;
}