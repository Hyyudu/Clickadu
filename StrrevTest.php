<?

include_once('Strrev.php');

class StrrevTest extends PHPUnit_Framework_TestCase	{
    public function testprocess()	{
        $s = new Strrev();
        $this->assertEquals($s->process('Hello, World!'), '!dlrW ,llH');
    }
}

