SELECT a.name, SUM(c.quantity * c.unit_price) AS total_revenue
FROM Categories a
INNER JOIN Products b ON a.category_id = b.category_id
INNER JOIN Order_Items c ON b.product_id = c.product_id
GROUP BY a.name
ORDER BY total_revenue DESC;