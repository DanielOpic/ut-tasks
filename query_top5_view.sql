CREATE VIEW top_5_authors AS
SELECT a.id, a.first_name, a.last_name, COALESCE(AVG(r.rating), 0) AS avg_rating
FROM authors a
LEFT JOIN books b ON a.id = b.author_id
LEFT JOIN reviews r ON b.id = r.book_id
GROUP BY a.id
ORDER BY avg_rating DESC
LIMIT 5;

Select * From top_5_authors