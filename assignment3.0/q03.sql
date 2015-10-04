SELECT distinct tblCourses.fldCourseName, fldDays, fldStart, fldStop FROM tblSections, tblCourses, tblTeachers
WHERE tblCourses.pmkCourseId = tblSections.fnkCourseId
AND tblTeachers.pmkNetId = tblSections.fnkTeacherNetId  
AND tblTeachers.fldLastName = "Horton"
ORDER BY fldStart ASC