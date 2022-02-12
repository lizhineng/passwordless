<?php

namespace Zhineng\Passwordless\Contracts;

interface IssueToken
{
    public function issue(): string;
}
