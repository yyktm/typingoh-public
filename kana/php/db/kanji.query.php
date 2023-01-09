<?php

namespace db;

use db\DataSource;
use model\KanjiModel;

class KanjiQuery
{
    public static function fetchByLevel($level)
    {
        $db = new DataSource;
        $sql = 'select * from Kanji where level = :level and del_flg != 1;';

        $result = $db->select($sql, [
            ':level' => $level
        ], DataSource::CLS, KanjiModel::class);

        return $result;

    }
}