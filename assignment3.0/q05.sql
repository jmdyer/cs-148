SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, COUNT(fnkStudentId) AS "total" FROM tblTeachers, tblSections, tblEnrolls
WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId
AND tblSections.fldCRN = tblEnrolls.fnkSectionId
AND fldType <> "LAB"
GROUP BY tblTeachers.fldLastName, tblTeachers.fldFirstName
ORDER BY `total`  DESC