<?php
namespace controller\InquiryForm;
use function view\InquiryForm\InquiryForm;
use function view\InquiryForm\InquiryFormPost;

use model\InquiryModel;
use db\InquiryQuery;
use lib\Msg;
use Throwable;


function get(){

    $inquiry = InquiryModel::getSessionAndFlush();

    if(empty($inquiry)) {
        $inquiry = new InquiryModel;
        $inquiry->mailAddress = '';
        $inquiry->body = '';
    }

    InquiryForm($inquiry);
    
}

function post(){


    $inquiry = new InquiryModel;
    $inquiry->mailAddress = get_param('MailAddress', null);
    $inquiry->type = get_param('InquiryType', null);
    $inquiry->body = get_param('body', null);

    try {

        if (!empty($inquiry->body)) {
        $is_success = InquiryQuery::insert($inquiry);
        }

    } catch(Throwable $e) {
        
        Msg::push(Msg::DEBUG, $e->getMessage());
        $is_success = false;
        
    }
    
    if(!isset($is_success)){
        $is_success = false;
    }

    if($is_success) {

        Msg::push(Msg::INFO, 'お問い合わせを送信しました');
        // redirect('home');
        InquiryFormPost($is_success);
        
    } else {
        
        Msg::push(Msg::ERROR, 'お問い合わせの送信に失敗しました');
        InquiryModel::setSession($inquiry);
        // redirect(GO_REFERER);
        InquiryFormPost($is_success);
    }
}