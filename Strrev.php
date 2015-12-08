<?

class Strrev	{
    public function process($s)	{
        return strrev(preg_replace('~[aeiouy]+~i', '', $s));
    }
}

$S = new Strrev();
fwrite(STDOUT, $S->process($argv[1]));