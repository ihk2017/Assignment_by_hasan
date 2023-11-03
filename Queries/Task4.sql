SELECT a.name, SUM(b.total_amount) AS total_purchase_amount
FROM Customers a
INNER JOIN Orders b ON a.customer_id = b.customer_id
GROUP BY a.name
ORDER BY total_purchase_amount DESC
LIMIT 5;