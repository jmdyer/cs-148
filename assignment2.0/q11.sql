SELECT DISTINCT fnkCourseId, COUNT(fnkCourseId) FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fnkCourseId)>=50
