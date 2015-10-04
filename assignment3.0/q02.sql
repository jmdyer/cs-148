SELECT distinct fldDays, fldStart, fldStop FROM tblSections, tblTeachers
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId  
AND tblTeachers.fldLastName = "Snapp"
ORDER BY fldStart ASC