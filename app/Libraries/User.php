<?php

namespace App\Libraries;

use Carbon\Carbon;

class User{
    private $username; 
    private $firstname;
    private $lastname;
    private $gender;
    private $birthday;
    private $nativeLanguage;
    private $knownLanguages;
    private $targetLanguages;
    private $currentMeetingList;

    function __construct($username, $firstname, $lastname, $gender, $birthday, $nativeLanguage, $knownLanguages, $targetLanguages, $currentMeetingList)
    {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->nativeLanguage = $nativeLanguage;
        $this->knownLanguages = $knownLanguages;
        $this->targetLanguages = $targetLanguages;
        $this->currentMeetingList = $currentMeetingList;
    }

    function setUsername($username){
        $this->username = $username;
    }

    function getUsername(){
        return $this->username;
    }

    function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    function getFirstname(){
        return $this->firstname;
    }

    function setLastname($lastname){
        $this->lastname = $lastname;
    }

    function getLastname(){
        return $this->lastname;
    }

    function setGender($gender){
        $this->gender = $gender;
    }

    function getGender(){
        return $this->gender;
    }

    function setBirthday($birthday){
        $this->birthday = $birthday;
    }

    function getBirthday(){
        return $this->birthday;
    }

    function setNativeLanguage($nativeLanguage){
        $this->nativeLanguage = $nativeLanguage;
    }

    function getNativeLanguage(){
        return $this->nativeLanguage;
    }

    function setKnownLanguages($knownLanguages){
        $this->knownLanguages = $knownLanguages;
    }

    function getKnownLanguages(){
        return $this->knownLanguages;
    }

    function setTargetLanguages($targetLanguages){
        $this->targetLanguages = $targetLanguages;
    }

    function getTargetLanguages(){
        return $this->targetLanguages;
    }

    function setCurrentMeetingList($currentMeetingList){
        $this->currentMeetingList = $currentMeetingList;
    }

    function getCurrentMeetingList(){
        return $this->currentMeetingList;
    }

    function getAge(){
        $years = Carbon::parse($this->birthday)->age;
        return $years;
    }
}