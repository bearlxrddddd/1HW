-- автоматически посчитать общую сумму заказа 
SELECT SUM(po.quantity * po.price) AS sum 
FROM positions_order po
WHERE po.order_id = 1;
-- уменьшить остаток каждого товара на складе 

-- создать записи в таблице "Позиции заказа"