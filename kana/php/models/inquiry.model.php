<?php

namespace model;

use lib\Msg;
use Stringable;

class InquiryModel extends AbstractModel
{

    public int $id;
    public string $mailAddress;
    public string $type;
    public String $body;
    public int $del_flg;
    protected static $SESSION_NAME = '_Inquory';

    public function isValidId()
    {
        return static::validateId($this->id);
    }

    public static function validateId($val) {
        $res = true;

        if (empty($val) || !is_numeric($val)) {

            Msg::push(Msg::ERROR, 'パラメータが不正です。');
            $res = false;

        }

        return $res;
    }

    public function isValidBody()
    {
        return static::validateBody($this->body);
    }

    public static function validateBody($val) {
        $res = true;

        if (empty($val)) {

            Msg::push(Msg::ERROR, 'お問い合わせ内容を入力してください。');
            $res = false;

        } else {

            if (mb_strlen($val) > 401) {

                Msg::push(Msg::ERROR, 'お問い合わせ内容は400文字以内で入力してください。');
                $res = false;

            }

        }

        return $res;
    }
}
