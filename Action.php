<?php
    include "Classes/School.php";
    $SchoolObj = new School();

    if(isset($_POST['add_member'])){
        $memberId = $_POST['memberId'];
        $fName = $_POST['fName'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $level = $_POST['level'];
        $lessonId = $_POST["lessonId"];
        $pwdHashed = md5($pwd);

        $SchoolObj->add_member($memberId,$fName,$address,$tel,$email,$pwdHashed,$level,$lessonId);

    }elseif(isset($_POST['member_login'])){
        $memberId = $_POST['memberId'];
        $pwd = md5( $_POST['pwd']);

        $SchoolObj->login_member($memberId,$pwd);

    }elseif(isset($_POST['add_lesson'])){
        $lessonId = $_POST['lessonId'];
        $lessonDate = $_POST['lessonDate'];
        $lessonDay = $_POST['lessonDay'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $coachId = $_POST['coachId'];
        $level = $_POST['level'];

        $SchoolObj->add_lesson($lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level);

    }elseif(isset($_POST['add_coach'])){
        $coachId = $_POST['coachId'];
        $coachName = $_POST['coachName'];

        $SchoolObj->add_coach($coachId,$coachName);

    }elseif(isset($_POST['reserve'])){
        $lessonPk = $_POST['lessonPk'];
        $lessonId = $_POST['lessonId'];
        $lessonDate = $_POST['lessonDate'];
        $lessonDay = $_POST['lessonDay'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $coachId = $_POST['coachId'];
        $level = $_POST['level'];
        $mId = $_POST['mId'];

        $SchoolObj->reserve_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId);


    }elseif(isset($_POST['cancel'])){
        $lessonPk = $_POST['lessonPk'];
        $lessonId = $_POST['lessonId'];
        $lessonDate = $_POST['lessonDate'];
        $lessonDay = $_POST['lessonDay'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $coachId = $_POST['coachId'];
        $level = $_POST['level'];
        $mId = $_POST['mId'];

        $SchoolObj->cancel_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId);


    }elseif(isset($_POST['replace'])){
        $lessonPk = $_POST['lessonPk'];
        $lessonId = $_POST['lessonId'];
        $lessonDate = $_POST['lessonDate'];
        $lessonDay = $_POST['lessonDay'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $coachId = $_POST['coachId'];
        $level = $_POST['level'];
        $mId = $_POST['mId'];

        $SchoolObj->replace_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId);


    // }elseif(isset($_POST['search'])){

        // if(isset($usedTicket)){
        //     $sLevel = $_POST['selectLevel'];
        //     $sCoach = $_POST['selectCoach'];
        //     $sTicket = $_POST['selectTicket'];

        //     $SchoolObj->search_lesson($sLevel,$sCoach);
        // }
    }
?>