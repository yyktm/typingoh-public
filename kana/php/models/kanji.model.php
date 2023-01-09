<?php

namespace model;

use lib\Msg;

class KanjiModel extends AbstractModel
{

    public int $id;
    public string $question;
    public string $answer;
    public int $level;
    public int $ver;
    public int $del_flg;
    protected static $SESSION_NAME = '_Kanji';

}
