<?php include 'view/header.php'; ?>
<?php include 'view/sidebar.php'; ?>
<section>
    <h1>Electives Course List</h1>
    <table class="gridtable">
    
    <tr>
    		<th>Course Name </td>
    		<th>Course Type </td>
    		<th>Teacher </td>
    		<th>Times </td>
   </tr>

    <?php foreach ($courseList as $course) :
        // Get product data
        $courseId = $course['course_id'];
        $courseName = $course['course_name'];
        $courseShortName = $course['course_short_name'];
        $courseDesc = $course['course_desc'];
        $courseType = $course['course_type_desc'];
        $teacher = $course['display_name'];
        $section = $course['section_nbr'];
        $times = $course['times'];
    ?>
        <tr>
            <td nowrap>
                    <?php echo $courseName; ?>
            </td>
            <td nowrap>
                    <?php echo $courseType; ?>
            </td>
            <td nowrap>
                    <?php echo $teacher; ?>
            </td>
            <td no wrap>
                    <?php echo $times; ?>
            </td>            
        </tr>
    <?php endforeach; ?>
    </table>
</section>
<?php include 'view/footer.php'; ?>