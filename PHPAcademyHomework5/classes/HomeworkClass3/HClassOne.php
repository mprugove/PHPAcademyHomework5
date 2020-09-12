<?php

namespace classes\HomeworkClass3;

use classes\AbstractClass\AbstractClass;

class HClassOne extends AbstractClass
{
    public function viewAction()
    {
        return get_class($this);
    }
}