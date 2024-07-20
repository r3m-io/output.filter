<?php

namespace Package\R3m\Io\Output\Filter\Output\Filter;

use R3m\Io\App;

use R3m\Io\Module\Controller;

class Comment extends Controller
{

    public static function remove(App $object, $destination, $filter, $options = []): mixed
    {
        d($destination);
        d($filter);
        ddd($options);
        return $response;
    }

}