/*
Dibawah "FROM purchases" tambahkan code untuk mengambil baris
dengan nilai tanggal "2018-11-01" dan sebelumnya, dari kolom "purchased_at"
*/

SELECT *
FROM purchases
WHERE purchased_at <= "2018-11-01";

/*
Dibawah "FROM purchases" tambahkan code untuk baris dimana
kolom "name" mengandung string "puding"
*/

SELECT *
FROM purchases
WHERE name LIKE "%puding%";

/*
dibawah "FROM purchases" gunakan operator NOT untuk menambahkan code untuk
mengambil baris dimana nilai kolom "character_name" adalah bukan "Ninja Ken"
*/

SELECT *
FROM purchases
WHERE NOT character_name = "Ninja Ken";

/*
dibawah "FROM purchases" tambahkan code untuk
menambahkan baris dimana kolom "price" adalah NULL
*/

SELECT *
FROM purchases
WHERE price IS NULL;

/*
setelah "FROM purchases" tambahkan code untuk mengambil baris dimana nilai
kolom "category" adalah "makanan" dan kolom "character_name" adalah "Guru Domba"
*/

SELECT *
FROM purchases
WHERE category = "makanan"
AND character_name = "Guru Domba";

/*
dibawah "FROM purchases" tambahkan code untuk mengambil maksimum 5 baris
dengan urutan terbesar dari kolom "price"
*/

SELECT *
FROM purchases
ORDER BY price DESC
LIMIT 5;