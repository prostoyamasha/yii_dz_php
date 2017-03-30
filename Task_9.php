<?php

/* Task-9
 * - реализовать связь многие ко многим между категориями и продуктами 
 * таким образом:-- создать новый продукты под названием 
 * 'CocaPepsi 0.5 liter' , 'CocaPepsi 1 liter'  , 'CocaPepsi 1.5 liter'
 * и сделать так чтобы они соответственно были и в тех и в 
 * других категориях. и один продукт сделать "Pivo 2 liter" - его 
 * не включать ни в какую категорию. оставить отношение старых продуктов
 * с категориями такое же как было но с учетом новой архитектуры базы данных.
 * - написать запросы:- выбрать уникальные названия категорий всех продуктов
 * 
 * SELECT DISTINCT category.title FROM category
 * 
 * - цены каждого продукта из категории кокала
 * 
 * SELECT product.title,product.price FROM product LEFT JOIN product2category 
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id WHERE category.id = 1
 * 
 * - максимальную цену кокальных продуктов
 * 
 * SELECT MAX(product.price) FROM product LEFT JOIN product2category 
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id WHERE category.id = 1
 * 
 * - минимальную цену кокальных продуктов
 * 
 * SELECT MIN(product.price) FROM product LEFT JOIN product2category 
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id WHERE category.id = 1
 * 
 * - среднюю цену кокальных продуктов
 * 
 * SELECT AVG(product.price) FROM product LEFT JOIN product2category 
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id WHERE category.id = 1
 * 
 * - посчитать количество кокальных продуктов
 * 
 * SELECT COUNT(product.id) FROM product LEFT JOIN product2category 
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id WHERE category.id = 1
 * 
 * - название категории и название продуктов. 
 * 
 * SELECT product.title, category.title FROM product LEFT JOIN product2category
 * ON product2category.product_id = product.id LEFT JOIN category 
 * ON product2category.category_id = category.id
 * 
 * выборку делать сначала из категории (приджоиниваем продукты) 
 * а потом наоборот. сделать это со всеми видами джоинов и посмотреть
 *  что получится в результате.
 * - написать запрос который нам реализует пагинацию на странице: 
 * 
 * SELECT * FROM alphabet ORDER BY id LIMIT 21, 10
 * 
 * условно говоря на странице 10 продуктов и нам щас нужна третья страница
 * - как реализовать связь один к одному? достаточно просто написать ответ
 */



