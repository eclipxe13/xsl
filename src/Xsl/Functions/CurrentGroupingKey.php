<?php
namespace Genkgo\Xsl\Xsl\Functions;

use Genkgo\Xsl\Callback\FunctionInterface;
use Genkgo\Xsl\Callback\ReplaceFunctionInterface;
use Genkgo\Xsl\Util\FunctionMap;
use Genkgo\Xsl\Xpath\Lexer;
use Genkgo\Xsl\Xsl\Functions;

/**
 * Class CurrentGroupingKey
 * @package Genkgo\Xsl\Xsl\Functions
 */
class CurrentGroupingKey implements ReplaceFunctionInterface, FunctionInterface
{
    /**
     * @param FunctionMap $functionMap
     */
    public function register(FunctionMap $functionMap)
    {
        $functionMap->set('current-grouping-key', $this);
    }

    /**
     * @param Lexer $lexer
     * @return array|string[]
     */
    public function replace(Lexer $lexer)
    {
        $groupId = substr($lexer->peek($lexer->key() + 2), 1, -1);

        $resultTokens = [];
        $resultTokens[] = '$current-group-' . $groupId;
        $resultTokens[] = '/';
        $resultTokens[] = '@key';

        $lexer->seek($lexer->key() + 3);
        return $resultTokens;
    }
}
