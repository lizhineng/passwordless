<?php

namespace Zhineng\Passwordless\Tokens;

use Zhineng\Passwordless\Contracts\IssueToken;

class StringToken implements IssueToken
{
    public function __construct(
        public int $length = 40
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
        $string = '';

        while (($len = strlen($string)) < $this->length) {
            $size = $this->length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['+', '/', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }
}
