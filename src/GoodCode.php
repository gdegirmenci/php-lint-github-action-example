<?php

namespace PHPLintGithubActionExample;

/**
 * Class GoodCode
 * @package PHPLintGithubActionExample
 */
class GoodCode implements CodeInterface
{
    /**
     * @return string
     */
    public function helloWorld(): string
    {
        return 'Hello world, I am a good code, believe me.';
    }

    /**
     * @return array
     */
    public function someBoringMethods(): array
    {
        return ['Good', 'Code'];
    }
}
