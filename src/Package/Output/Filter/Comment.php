<?php

namespace Package\R3m\Io\Output\Filter\Output\Filter;

use R3m\Io\App;

use R3m\Io\Module\Controller;
use R3m\Io\Module\Parse\Value;

class Comment extends Controller
{

    public static function remove(App $object, $destination, $filter, $options = []): mixed
    {
        if(array_key_exists('response', $options)){
            $options['response'] = Value::remove_comment($options['response']);
        }
        return $options['response'];
    }

}