<?php
        $institute = $_POST['institute'];
        $specialty = $_POST['specialty'];
        $teacher = $_POST['teacher'];
        $message = $_POST['message'];
        $mark = $_POST['mark'];
        $marks = $_POST['marks'];
        $institute = htmlspecialchars($institute);
        $specialty = htmlspecialchars($specialty);
        $teacher = htmlspecialchars($teacher);
        $message = htmlspecialchars($message);
        $mark = htmlspecialchars($mark);
        $marks = htmlspecialchars($marks);
        $institute = urldecode($institute);
        $specialty = urldecode($specialty);
        $teacher = urldecode($teacher);
        $message = urldecode($message);
        $mark = urldecode($mark);
        $marks = urldecode($marks);
        $institute = trim($institute);
        $specialty = trim($specialty);
        $teacher  = trim($teacher);
        $message  = trim($message);
        $mark  = trim($mark);
        $marks  = trim($marks);
        if (mail("hr.andriygtr@gmail.com", "Заявка с сайта", " Інститут:" .$institute.".\n Спеціальність: " .$specialty.".\n <b>Викладач:</b> ".$teacher.".\n Оцінка якості викладання: " .$mark.".\n Оцінка ставлення викладача до студентів:: " .$marks.".\n Коментарій: " .$message ,"From: lpnu.poll@lp.edu.ua \r\n")){
        echo "Відгук успішно відправлено";
        } else {
        echo "При відправці повідомлення сталася помилка";
        }

?>