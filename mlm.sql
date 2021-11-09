#Membuat database
CREATE DATABASE maximize;

#Membuat tabel
CREATE TABLE mlm(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Nama VARCHAR(255) NOT NULL,
	Alamat VARCHAR(255) NOT NULL,
	notel VARCHAR(255) NOT NULL,
	upline INT
);
#Untuk input data
INSERT INTO mlm(Nama,Alamat,notel,upline) VALUES('Nino','Medan','012',NULL),('Rian','Lubuk Pakam','034',1)
,('Monika','Tanjung Morawa','031',1),('Loas','Samosir','031',2),('Monika','Siantar','031',3)

#Fungsi Untuk mencari data
CREATE OR REPLACE PROCEDURE search(ids INT ,namas VARCHAR(255),notels VARCHAR(255))
SELECT * FROM mlm
WHERE id=ids OR nama=namas OR notel=notels

CALL search(NULL,'Monika',NULL)

SELECT * FROM mlm GROUP BY upline HAVING COUNT(id)<2
ORDER BY COUNT(id)


CREATE OR REPLACE PROCEDURE masukan(nama VARCHAR(255) , alamat VARCHAR(255),notels VARCHAR(255),uplines INT)
	IF (SELECT COUNT(*) FROM mlm WHERE upline=uplines GROUP BY upline) >= 2 THEN
		SELECT * FROM mlm GROUP BY upline HAVING COUNT(id)<2 ORDER BY id;
	ELSE 
		INSERT INTO mlm(Nama,Alamat,notel,upline) VALUES(nama,alamat,notels,uplines)
	END IF


