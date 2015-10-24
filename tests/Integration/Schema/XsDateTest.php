<?php
namespace Genkgo\Xsl\Integration\Schema;

use Genkgo\Xsl\Exception\CastException;

class XsDateTest extends AbstractSchemaTest
{
    public function testConstructor()
    {
        $result = $this->transformFile('Stubs/Schema/date.xsl');

        $this->assertContains('1995-05-10+00:00', $result);
    }

    public function testWrongConstructor()
    {
        $this->setExpectedException(CastException::class, 'Cannot create date from 20');
        $this->transformFile('Stubs/Schema/date-wrong-constructor.xsl');
    }

    public function testTooManyElements()
    {
        $this->setExpectedException(CastException::class, 'Cannot convert list of elements to string');
        $this->transformFile('Stubs/Schema/date-too-many-elements.xsl');
    }
}
