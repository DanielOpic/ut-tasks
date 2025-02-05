CREATE VIEW top_5_authors_ver2 AS
SELECT a.id, a.first_name, a.last_name, COUNT(ba.book_id) AS books_count, AVG(r.rating) AS avg_rating
FROM authors a
JOIN book_authors ba ON a.id = ba.author_id
JOIN books b ON ba.book_id = b.id
LEFT JOIN reviews r ON b.id = r.book_id
GROUP BY a.id
ORDER BY avg_rating DESC
LIMIT 5;

Select * From top_5_authors_ver2