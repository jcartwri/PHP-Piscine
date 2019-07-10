SELECT title, summary
	FROM film
	WHERE summary REGEXP("42") OR title REGEXP("2")
	ORDER BY duration ASC;
