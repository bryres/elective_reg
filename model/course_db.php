<?php
function get_course_list() {
    global $db;
    $query = 'SELECT course.course_id, course_name, course_short_name, course_desc, course_type_desc, teacher.display_name, course_section.section_nbr, GET_SCHEDULE_TIMES_LIST (course_section.section_id) as times
				from course
				inner join course_type
				on course.course_type_cde = course_type.course_type_cde
				inner join course_section
				on course.course_id = course_section.course_id
				inner join teacher
				on teacher.teacher_id = course_section.teacher_id
				where course.active = 1
				and course_section.active = 1';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}


?>