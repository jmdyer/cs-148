<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Assignment 2 SQL Select</title>
        <meta charset="utf-8">
        <meta name="Joelle Dyer" content="assignment 2">
        <meta name="description" content="sql select statements">
       
    </head>

    <body>
        <p>Joelle Dyer, assignment 2.0</p>
        <p><a href="/cs148develop/assignment2.0/q01.php">q01</a></p>
        <p><a href="/cs148develop/assignment2.0/q02.php">q02</a></p>
        <p><a href="/cs148develop/assignment2.0/q03.php">q03</a></p>
        <p><a href="/cs148develop/assignment2.0/q04.php">q04</a></p>
        <p><a href="/cs148develop/assignment2.0/q05.php">q05</a></p>
        <p><a href="/cs148develop/assignment2.0/q06.php">q06</a></p>
        <p><a href="/cs148develop/assignment2.0/q07.php">q07</a></p>
        <p><a href="/cs148develop/assignment2.0/q08.php">q08</a></p>
        <p><a href="/cs148develop/assignment2.0/q09.php">q09</a></p>
        <p><a href="/cs148develop/assignment2.0/q10.php">q10</a></p>
        <p><a href="/cs148develop/assignment2.0/q11.php">q11</a></p>
        <p><a href="/cs148develop/assignment2.0/q12.php">q12</a></p>
        
<!--

SELECT pmkNetId FROM tblTeachers
SELECT fldDepartment from tblCourses WHERE fldCourseName Like "Introduction%"
SELECT * FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin"
SELECT * from tblCourses WHERE fldCourseName = "Database Design for the Web"
SELECT fldLastName, fldFirstName FROM tblTeachers where pmkNetId LIKE 'r%o'
SELECT fldCourseName FROM tblCourses WHERE fldDepartment <> 'CS' AND fldCourseName LIKE '%data%'
SELECT COUNT(DISTINCT fldDepartment) from tblCourses 
SELECT DISTINCT fldBuilding, COUNT(*) AS fldSection FROM tblSections GROUP BY fldBuilding
SELECT DISTINCT fldBuilding, COUNT(*) AS fldNumStudents FROM tblSections WHERE fldDays LIKE '%W%' GROUP BY fldBuilding ORDER BY fldNumStudents DESC
SELECT DISTINCT fldBuilding, COUNT(*) AS fldNumStudents FROM tblSections WHERE fldDays LIKE '%F%' GROUP BY fldBuilding ORDER BY fldNumStudents DESC

-->
        
    </body>
</html>