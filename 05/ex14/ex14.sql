SELECT etage_salle AS 'floor', SUM(nbr_siege) AS 'seats' FROM salle GROUP BY etage_salle ORDER BY SUM(nbr_siege) DESC;
