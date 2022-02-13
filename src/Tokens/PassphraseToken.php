<?php

namespace Zhineng\Passwordless\Tokens;

use Zhineng\Passphrase\Passphrase;
use Zhineng\Passwordless\Contracts\IssueToken;

class PassphraseToken implements IssueToken
{
    public function __construct(
        protected Passphrase $passphrase
    ) {
        //
    }

    public function issue(): string
    {
        return $this->passphrase->make();
    }
}
