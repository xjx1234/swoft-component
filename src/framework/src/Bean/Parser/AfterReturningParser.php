<?php

namespace Swoft\Bean\Parser;

use Swoft\Bean\Annotation\AfterReturning;
use Swoft\Bean\Collector\AspectCollector;

/**
 * the before advice of parser
 *
 * @uses      AfterReturningParser
 * @version   2017年12月24日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class AfterReturningParser extends AbstractParser
{
    /**
     * afterReturning parsing
     *
     * @param string         $className
     * @param AfterReturning $objectAnnotation
     * @param string         $propertyName
     * @param string         $methodName
     * @param null           $propertyValue
     *
     * @return null
     */
    public function parser(string $className, $objectAnnotation = null, string $propertyName = "", string $methodName = "", $propertyValue = null)
    {
        AspectCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);

        return null;
    }
}
