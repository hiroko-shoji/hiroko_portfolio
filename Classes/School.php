<?php
include 'Database.php';

    class School extends Database{

        public function add_member($memberId,$fName,$address,$tel,$email,$pwdHashed,$level,$lessonId){
            $sql = "INSERT INTO members(members_id,members_name,address,phone_number,email,password,level_id,lesson_id) VALUES('$memberId','$fName','$address','$tel','$email','$pwdHashed','$level','$lessonId')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:adminRegister.php');
            }else{
                return FALSE;
            }
        }

        public function login_member($memberId,$pwd){
            $sql = "SELECT * FROM members WHERE members_id = '$memberId'";
            $result = $this->conn->query($sql);

            if($result->num_rows==1){
                $row = $result->fetch_assoc();
                $_SESSION['member_id'] = $row['members_id'];
                $_SESSION['member_name'] = $row['members_name'];
                $_SESSION['member_level'] = $row['level_id'];

                header('location:welcome.php');

            }else{
                header('location:login.php?login=fail');
            }

        }

        public function add_lesson($lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level){
            $sql = "INSERT INTO lessons(lesson_id,date,day,start_time,end_time,coach_id,level_id) VALUES('$lessonId','$lessonDate','$lessonDay','$startTime','endTime','$coachId','$level')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:adminLessonAdded.php');

            }else{
                return FALSE;
            }
        }

        public function add_coach($coachId,$coachName){
            $sql = "INSERT INTO coaches(coach_id,coach_name) VALUES('$coachId','$coachName')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:adminCoach.php');
            }else{
                return FALSE;
            }
        }

        public function display_all_coach(){
            $sql = "SELECT * FROM coaches";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $coachArray = array();
                while($database_row = $result->fetch_assoc()){
                    $coachArray[] = $database_row;
                }
                return $coachArray;
            }else{
                return FALSE;
            }
        }

        public function display_all_ticket($mId){
            $sql = "SELECT * FROM tickets WHERE members_id = '$mId'";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $ticketArray = array();
                while($ticket_row = $result->fetch_assoc()){
                    $ticketArray[] = $ticket_row;
                }
                return $ticketArray;
            }else{
                return FALSE;
            }
        }

        public function display_all_level($mLevel){
            $sql = "SELECT * FROM levels WHERE level_id = '$mLevel'";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $levelArray = array();
                while($level_row = $result->fetch_assoc()){
                    $levelArray[] = $level_row;
                }
                return $levelArray;
            }else{
                return FALSE;
            }
        }
// ↑後で使う

        public function search_lesson($sLevel,$sCoach){
            $sql = "SELECT * FROM lessons INNER JOIN coaches ON lessons.coach_id = coaches.coach_id WHERE lessons.level_id = '$sLevel' AND lessons.coach_id = '$sCoach'";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $lessonArray = array();
                while($lesson_row = $result->fetch_assoc()){
                    $lessonArray[] = $lesson_row;
                }
                return $lessonArray;
            }else{
                return FALSE;
            }

        }

        public function get_one_lesson($lessonPk){
            $sql = "SELECT * FROM lessons INNER JOIN coaches ON lessons.coach_id = coaches.coach_id WHERE lessons.lesson_pk = '$lessonPk'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                return $result->fetch_assoc();
            }else{
                return FALSE;
            }

        }


        public function reserve_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId){
            $sql = "INSERT INTO reserved_lessons(lesson_pk,lesson_id,date,day,start_time,end_time,coach_id,level_id,members_id) VALUES('$lessonPk','$lessonId','$lessonDate','$lessonDay','$startTime','$endTime','$coachId','$level','$mId')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                $sql = "DELETE FROM lessons WHERE lesson_pk = $lessonPk";
                $result = $this->conn->query($sql);

                if($result == TRUE){
                    header('location:reserveResult.php');
                }else{
                    header('location:reserveResultFalse.php');
                }
            }
        }

        public function display_mId_lesson($mId){
            $sql = "SELECT * FROM reserved_lessons INNER JOIN coaches ON reserved_lessons.coach_id = coaches.coach_id WHERE reserved_lessons.members_id = '$mId'";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $mIdlessonArray = array();
                while($mIdlesson_row = $result->fetch_assoc()){
                    $mIdlessonArray[] = $mIdlesson_row;
                }
                return $mIdlessonArray;
            }else{
                return FALSE;
            }
        }

        public function cancel_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId){
            $sql = "INSERT INTO lessons(lesson_pk,lesson_id,date,day,start_time,end_time,coach_id,level_id) VALUES('$lessonPk','$lessonId','$lessonDate','$lessonDay','$startTime','$endTime','$coachId','$level')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                $sql = "DELETE FROM reserved_lessons WHERE lesson_pk = $lessonPk";
                $result = $this->conn->query($sql);

                if($result == TRUE){
                    $sql = "INSERT INTO tickets(members_id,lesson_id,date,day,start_time,exp_date,type) VALUES('$mId','$lessonId','$lessonDate','$lessonDay','$startTime','2020/12/31','Cancel')";
                    $result = $this->conn->query($sql);

                    if($result == TRUE){
                        header('location:cancelResult.php');

                    }else{
                        header('location:cancelResultFalse.php');
                    }
                }
            }
        }

        public function get_reserved_lesson($lessonPk){
            $sql = "SELECT * FROM reserved_lessons INNER JOIN coaches ON reserved_lessons.coach_id = coaches.coach_id WHERE reserved_lessons.lesson_pk = '$lessonPk'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                return $result->fetch_assoc();
            }else{
                return FALSE;
            }

        }

        public function replace_lesson($lessonPk,$lessonId,$lessonDate,$lessonDay,$startTime,$endTime,$coachId,$level,$mId){
            $sql = "INSERT INTO lessons(lesson_pk,lesson_id,date,day,start_time,end_time,coach_id,level_id) VALUES('$lessonPk','$lessonId','$lessonDate','$lessonDay','$startTime','$endTime','$coachId','$level')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                $sql = "DELETE FROM reserved_lessons WHERE lesson_pk = $lessonPk";
                $result = $this->conn->query($sql);

                if($result == TRUE){
                    $sql = "INSERT INTO tickets(members_id,lesson_id,date,day,start_time,exp_date,type) VALUES('$mId','$lessonId','$lessonDate','$lessonDay','$startTime','2020/12/31','Cancel')";
                    $result = $this->conn->query($sql);

                    if($result == TRUE){
                        header('location:replaceResult.php');

                    }else{
                        header('location:replaceResultFalse.php');
                    }
                }
            }
        }

        public function buy_ticket($ticketQty,$mId){

            for ($count =0; $count < $ticketQty; $count++){
                $sql = "INSERT INTO tickets(members_id,exp_date,type) VALUES('$mId','2020/12/31','Open Ticket')";
                $result = $this->conn->query($sql);

                if($result == TRUE){
                    header('location:thankyou.php');

                }else{
                    header('location:shoppingResultFalse.php');
                }

            }
        }

        // $sql = "INSERT INTO tickets(members_id,date,day,exp_date,type) VALUES('$mId',date('Y-m-d'),'date('w')','2020/12/31','Open Ticket')";

        // public function ticket_num($mId){
        //     $sql = "SELECT COUNT(*) FROM tickets WHERE members_id = '$mId'";
        //     $result = $this->conn->query($sql);

        //     if($result == TRUE){
        //         $count = $result->fetch();
        //         return $count;

        //     }else{
        //         echo "iiiii";
        //     }

        // }
}

?>