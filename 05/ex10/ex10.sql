SELECT title AS 'Title', summary AS 'Summary', annee_prod FROM film INNER JOIN prod_year ON film.id_genre = genre.id_genre WHERE genre.nom = "erotic" ORDER BY film.annee_prod DESC;
