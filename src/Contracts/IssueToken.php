<?php

namespace Zhineng\Passwordless\Contracts;

interface IssueToken
{
    /**
     * Issue a new token.
     *
     * @return string
     */
    public function issue(): string;
}
