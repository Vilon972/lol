SELECT COUNT(*) AS 'nb_susc', FLOOR(AVG(price)) AS 'av_susc', SUM(duree_abo) % 42 AS 'ft' FROM suscribtion;
