<?php

namespace Zhineng\Passwordless\Tests;

use PHPUnit\Framework\TestCase;
use Zhineng\Passwordless\Contracts\IssueToken;
use Zhineng\Passwordless\Tokens\PassphraseToken;
use Zhineng\Passwordless\Tokens\PinToken;
use Zhineng\Passwordless\Tokens\StringToken;

class TokenTest extends TestCase
{
    /**
     * @dataProvider provides_token_issuers
     */
    public function test_token_generation(IssueToken $token)
    {
        $this->assertNotNull($token->issue());
    }

    public function provides_token_issuers()
    {
        return [
            'string token' => [new StringToken],
            'pin token' => [new PinToken],
            'passphrase token' => [new PassphraseToken],
        ];
    }
}
