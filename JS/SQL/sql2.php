/*
dapatkan total harga, lalu kelompokkan hasilnya berdasarkan tanggal,
hanya untuk grup yang memiliki total harga lebih dari 20
*/

SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at
HAVING SUM(price) > 20;


/*
dapatkan total harga, lalu kelompokkan hasilnya berdasarkan tanggal,
hanya untuk grup yang memiliki total harga lebih dari 20
*/

SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at
HAVING SUM(price) > 20;


/*
grup berdasarkan categori, setelah itu dapatkan total jumlah kolom price
dan kolom category untuk setiap grup
*/

SELECT SUM(price), category
FROM purchases
GROUP BY category
;


/*
buatlah sebuah grup untuk setiap karakter,
dan dapatkan total jumlah dari kolom price dan character_name 
tetapi, aggregatkan hasil hanya untuk kolom category dengan nilai "lainnya"
*/

SELECT SUM(price), character_name
FROM purchases
WHERE category = "lainnya"
GROUP BY character_name
;

