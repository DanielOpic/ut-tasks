SELECT a.first_name, a.last_name, COUNT(b.id) AS book_count
FROM authors a
LEFT JOIN books b ON a.id = b.author_id
GROUP BY a.id
ORDER BY book_count DESC;
