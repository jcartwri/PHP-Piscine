SELECT `title` AS "Title", summary AS "Summary", prod_year FROM film where id_genre = (SELECT id_genre FROM genre where name  = 'drama') ORDER BY prod_year DESC;
