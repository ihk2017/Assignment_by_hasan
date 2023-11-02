SELECT b.name, a.quantity, a.quantity * a.unit_price AS total_amount
FROM Order_Items a
INNER JOIN Products b ON a.product_id = b.product_id
ORDER BY a.order_id ASC;