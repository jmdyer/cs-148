<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Assignment 2 SQL Select</title>
        <meta charset="utf-8">
        <meta name="Joelle Dyer" content="assignment 2">
        <meta name="description" content="sql select statements">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
       
    </head>

    <body>
        <h3>Joelle Dyer, assignment 2.0</h3>
        <p>q01 <a href="/cs148/assignment2.0/q01.php">SQL:</a> SELECT pmkNetId FROM tblTeachers</p>
        <p>q02 <a href="/cs148/assignment2.0/q02.php">SQL:</a> SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"</p>
        <p>q03 <a href="/cs148/assignment2.0/q03.php">SQL:</a> SELECT * FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin"</p>
        <p>q04 <a href="/cs148/assignment2.0/q04.php">SQL:</a> SELECT * from tblCourses WHERE fldCourseName = "Database Design for the Web"</p>
        <p>q05 <a href="/cs148/assignment2.0/q05.php">SQL:</a> SELECT fldLastName, fldFirstName FROM tblTeachers where pmkNetId LIKE "r%o"</p>
        <p>q06 <a href="/cs148/assignment2.0/q06.php">SQL:</a> SELECT fldCourseName FROM tblCourses WHERE fldDepartment <> "CS" AND fldCourseName LIKE "%data%"</p>
        <p>q07 <a href="/cs148/assignment2.0/q07.php">SQL:</a> SELECT COUNT(DISTINCT fldDepartment) from tblCourses</p>
        <p>q08 <a href="/cs148/assignment2.0/q08.php">SQL:</a> SELECT DISTINCT fldBuilding, COUNT(*) AS fldSection FROM tblSections GROUP BY fldBuilding</p>
        <p>q09 <a href="/cs148/assignment2.0/q09.php">SQL:</a> SELECT DISTINCT fldBuilding, COUNT(*) AS fldNumStudents FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY fldNumStudents DESC</p>
        <p>q10 <a href="/cs148/assignment2.0/q10.php">SQL:</a> SELECT DISTINCT fldBuilding, COUNT(*) AS fldNumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldNumStudents DESC</p>
        <p>q11 <a href="/cs148/assignment2.0/q11.php">SQL:</a> SELECT DISTINCT fnkCourseId, COUNT(fnkCourseId) FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fnkCourseId)>=50;</p>
        <p>q12 <a href="/cs148/assignment2.0/q12.php">SQL:</a> SELECT SUM(fldNumStudents - fldMaxStudents) FROM tblSections WHERE fldNumStudents>fldMaxStudents</p>
        
    </body>
</html>