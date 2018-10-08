SELECT last_name FROM distrib WHERE id_distrib IN (42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90) OR last_name LIKE '%y%y%' OR last_name LIKE '%Y%Y%' LIMIT 5 OFFSET 3;
