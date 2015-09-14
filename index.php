<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html: charset-UTF-8">
        <title></title>
    </head>

    <body>
        <?php
            include( 'Student.php' );
            
            /**
             * Creates an array of students
             */
            $students = array();
            
            /**
             * Adds the first student and defines it's properties
             */
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            /**
             * Adds the second student and defines it's properties
             */
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home', 'albert@braniacs.com');
            $second->add_email('work1', 'a_einstein@bcit.ca');
            $second->add_email('work2', 'albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            /**
             * Adds the third student (Myself) and defines it's properties
             */
            $third = new Student();
            $third->surname = "Zhou";
            $third->first_name = "Becky";
            $third->add_email('home', 'becky@home.com');
            $third->add_email('work', 'bzhou@work.ca');
            $third->add_email('school', 'bzhou_13@bcit.ca');
            $third->add_grade(100);
            $third->add_grade(50);
            $third->add_grade(60);
            $students['b789'] = $third;
            
            /**
             * Sorts students in alphabetical order
             */
            ksort($students);
            
            /**
             * Displays all students
             */
            foreach( $students as $student) {
                
                echo $student->toString();
            }
            
        ?>
        
    <body>
</html>


