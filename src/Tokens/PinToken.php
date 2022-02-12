<?php

namespace Zhineng\Passwordless\Tokens;

use Zhineng\Passwordless\Contracts\IssueToken;

class PinToken implements IssueToken
{
    public function issue(): string
    {
        return 'foo';
    }
}
