<?php
namespace PhpOnboardSm\Routes;

/*

Author: Stojan Mitric
Class Routes defines routes of the app.

*/

class Routes
{
    private $uri = array();
    private $callback = array();

    public function add($uri = '', $callback = '')
    {
        $this->uri[] = $uri;
        $this->callback[] = $callback;
    }

    public function run()
    {
        $url = isset($_GET['route']) ? '/' . $_GET['route'] : '/';

        foreach ($this->uri as $key => $value)
        {

            if (preg_match("#^$value$#", $url, $params))
            {

                array_shift($params);
                call_user_func_array($this->callback[$key], $params);

            }
        }
    }
}

?>