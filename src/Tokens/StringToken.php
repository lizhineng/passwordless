<?php

namespace Zhineng\Passwordless\Tokens;

use Zhineng\Passwordless\Contracts\IssueToken;

class StringToken implements IssueToken
{
    public function issue(): string
    {
        return 'foo';
    }
}
