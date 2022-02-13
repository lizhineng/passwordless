<?php

namespace Zhineng\Passwordless\Tokens;

use Zhineng\Passwordless\Contracts\IssueToken;

class PinToken implements IssueToken
{
    public function __construct(
        public int $length = 6
    ) {
        //
    }

    public function length(int $length)
    {
        $this->length = $length;

        return $this;
    }

    public function issue(): string
    {
        $int = random_int(0, 10 ** $this->length - 1);

        return str_pad($int, $this->length, '0', STR_PAD_LEFT);
    }
}
