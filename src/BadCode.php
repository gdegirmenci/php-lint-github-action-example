<?php

namespace PHPLintGithubActionExample;

/**
 * Class BadCode
 * @package PHPLintGithubActionExample
 */
class BadCode implements CodeInterface
{
    /**
     * @return string
     */
    public function helloWorld(): string
    {return 'Hello world, I am a bad code, believe me.';
    }

    /**
     * @return array
     */
    public function someBoringMethods(): array {
        return ['Good', 'Code'];;
    }
}
?>
