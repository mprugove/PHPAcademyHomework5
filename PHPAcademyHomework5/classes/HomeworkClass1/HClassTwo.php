<?php

namespace classes\HomeworkClass1;

use classes\AbstractClass\AbstractClass;

class HClassTwo extends AbstractClass
{
    public function viewAction()
    {
        return get_class($this);
    }
}