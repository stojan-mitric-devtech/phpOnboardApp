<?php

/*

Author: Stojan Mitric
Class Cat represents a Cat, it implements TalkInterface.

*/

namespace PhpOnboardSm\Model\Iexamples;

class Cat implements TalkInterface
{

    public function talk()
    {
        return "mjau";
    }

}

?>