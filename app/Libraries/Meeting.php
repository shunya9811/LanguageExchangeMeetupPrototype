<?php

namespace App\Libraries;

class Meeting{
    private $hostUsername;
    private $title;
    private $meetDate;
    private $location;
    private $languageA;
    private $languageB;
    private $participants;
    private $min;
    private $max;

    function __construct($hostUsername, $title, $meetDate, $location, $languageA, $languageB, $participants, $min, $max){
        $this->hostUsername = $hostUsername;
        $this->title = $title;
        $this->meetDate = $meetDate;
        $this->location = $location;
        $this->languageA = $languageA; 
        $this->languageB = $languageB;
        $this->participants = $participants;
        $this->min = $min;
        $this->max = $max;
    }

    function setHostUsername($hostUsername){
        $this->hostUsername = $hostUsername;
    }

    function getHostUsername(){
        return $this->hostUsername;
    }

    function setTitle($title){
        $this->title = $title;
    }

    function getTitle(){
        return $this->title;
    }

    function setMeetDate($meetDate){
        $this->meetDate = $meetDate;
    }

    function getMeetDate(){
        return $this->meetDate;
    }

    function setLocation($location){
        $this->location = $location;
    }

    function getLocation(){
        return $this->location;
    }

    function setLanguageA($languageA){
        $this->languageA = $languageA;
    }

    function getLanguageA(){
        return $this->languageA;
    }

    function setLanguageB($languageB){
        $this->languageB = $languageB;
    }

    function getLanguageB(){
        return $this->languageB;
    }

    function setParticipants($participants){
        $this->participants = $participants;
    }

    function getParticipants(){
        return $this->participants;
    }

    function setMin($min){
        $this->min = $min;
    }

    function getMin(){
        return $this->min;
    }

    function setMax($max){
        $this->max = $max;
    }

    function getMax(){
        return $this->max;
    }

    function addParticipants($participant){
        // ユーザーを参加者として追加できるかどうかを検証し、
        // 追加できる場合はそのユーザーを meetup に追加
        // 追加できたかどうかのブール値を返す

        // 現在の参加者の人数
        $memberNum = count($this->participants);        

        // 募集人数以上でないかを検証
        if ($memberNum >= $this->max){
            return false;
        }

        // 参加者のtarget言語を数える
        $countA = 0;
        $countB = 0;
        for ($i = 0; $i < $memberNum; $i++){
            if (in_array($this->participants[$i]->getTargetLanguages(), $this->languageA)){
                $countA++;
            }

            if (in_array($this->participants[$i]->getTargetLanguages(), $this->languageB)){
                $countB++;
            }
        }

        // A 言語を母国語とし、B 言語を練習したいユーザであるか、
        // もしくはB 言語を母国語とし、A 言語を練習したいユーザであるか

        // 新たな参加者がA言語を習得していて、B言語を習得したいと考えているパターン
        if (($participant->getNativeLanguage() == $this->languageA || in_array($participant->getKnownLanguages(), $this->languageA)) && (in_array($participant->getTargetLanguages(), $this->languageB)) && ($countB < $this->max / 2)){
            return true;
        }   
        // 新たな参加者がB言語を習得していて、A言語を習得したいと考えているパターン
        if (($participant->getNativeLanguage() == $this->languageB || in_array($participant->getKnownLanguages(), $this->languageB)) && (in_array($participant->getTargetLanguages(), $this->languageA)) && ($countA < $this->max / 2)){
            return true;
        }
        
        return false;                
    }
}