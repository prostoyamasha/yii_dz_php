<?php
/*Task-8
 *- выбрать все категории;
 * SELECT * FROM `category`;
 * 
 *- выбрать категорию с айдишником 2;
 * SELECT * FROM `category` WHERE 'id' = 2;
 * 
 *- выбрать категорию название которой 'CocaCola';
 * SELECT * FROM `category` WHERE `title` = 'Coca-Cola';
 * 
 *- выбрать категорию название которой содержит 'Cola';
 * SELECT * FROM `category` WHERE `title` LIKE '%Cola%';
 * 
 *- выбрать все активные категории;
 * SELECT * FROM `category` WHERE `status` = 1;
 * 
 *- выбрать все продукты с ценой большй одного доллара;
 * SELECT * FROM `product` WHERE `price` > 1;
 * 
 *- выбрать все продукты с ценой большй одного доллара
 *  но меньше трех долларов;
 * SELECT * FROM `product` WHERE `price` > 1 AND 'price'< 3;
 * 
 *- выбрать все продукты категории кокакола;
 * SELECT * FROM `product` WHERE `category_id' = 1;
 * 
 *-выбрать все продукты из всех активных категорий цена которых 
 *  больше одного доллара и меньше трех в названии которых 
 *  есть слово 'Cola'
 * SELECT * FROM `product` WHERE 'status' = 1 AND 'price' > 1 AND 
 * 'price'< 3 AND `title` LIKE '%Cola%';
 */



