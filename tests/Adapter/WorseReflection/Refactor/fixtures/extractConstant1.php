<?php

class extractMethod1
{
    public function bigMethod()
    {
        echo 'hello_world';
    }
}
--------
<?php

class extractMethod1
{
    const HELLO_WORLD = 'hello_world';

    public function bigMethod()
    {
        echo self::HELLO_WORLD;
    }
}
