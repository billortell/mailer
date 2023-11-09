<?php
namespace Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer extends PHPMailer {

    public function __construct()
    {
        // setup if needed
        $this->scaffold();
        $this->setup();
    }

    protected function scaffold()
    {
    }

    protected function setup()
    {
    }

    public function setupEmail()
    {
        $this->clearAddresses();
        $this->setBody(false);
        $this->setSubject(false);
        return $this;
    }

    public function getBody(){
        return $this->Body;
    }

    public function setBody($body){
        $this->Body = $body;
        return $this;
    }

    public function getSubject(){
        return $this->Subject;
    }

    public function setSubject($subject){
        $this->Subject = $subject;
        return $this;
    }

    public function sendEmail(){
        $response = $this->send();
    }

    protected function getViewFolder()
    {
        return dirname(__FILE__).'/views/';
    }

    private function getDateTime()
    {
        $timestamp = new \DateTime();
        return $timestamp->format('Y-m-d h:i:sA');
    }

    private function getDate()
    {
        $timestamp = new \DateTime();
        return $timestamp->format('Y-m-d');
    }


}


