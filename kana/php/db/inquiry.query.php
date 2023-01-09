<?php

namespace db;

use db\DataSource;
use model\InquiryModel;

class InquiryQuery
{
    public static function insert($inquiry){

        if (!($inquiry->isValidBody())) {
            return false;
        }

        $db = new DataSource;
        $sql = 'insert into inquiry(mailAddress, type, body) values(:mailAddress, :type, :body)';

        $result = $db->execute($sql, [
            ':mailAddress' => $inquiry->mailAddress,
            ':type' => $inquiry->type,
            ':body' => $inquiry->body
        ]);

        return $result;

    }
}