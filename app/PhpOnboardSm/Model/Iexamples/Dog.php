<?php

/*

Author: Stojan Mitric
Class Dog represents a Dog, it implements TalkInterface.

*/

namespace PhpOnboardSm\Model\Iexamples;

class Dog implements TalkInterface
{

    public function talk()
    {
        return "av";
    }

}

?>