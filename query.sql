SELECT * FROM marqueur;

SELECT m.nom, type, pays, latitude, longitude, p.nom AS nom_pays 
FROM marqueur m, pays p  
WHERE pays = code;

SELECT m.id, m.nom, type, ville, p.nom AS nom_pays, mu.date, u.login 
FROM marqueur m, pays p, marqueur_usager mu, usager u 
WHERE (m.pays = p.code) AND  (m.id = mu.id_marqueur) AND (mu.id_usager = u.id);

# Requete creattion table 
CREATE TABLE information(
	id INT(11) NOT NULL AUTO_INCREMENT,
	nom VARCHAR(10),
	prenom VARCHAR(10),
	adresse VARCHAR(255)
)

#modification la table (rename)
ALTER TABLE information RENAME informations;

#delete database and table
DROP DATABASE information;
DROP TABLE information;

#insert information
INSERT INTO informations (
		nom,
		prenom
)
Values (
		'Yu-Ju',
		'SHIH'
);
#change type to auto
ALTER TABLE `informations` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

#add database
UPDATE informations SET adresse = '50 grand rue jean moulin WHERE' nom='Yu-Ju';

#修改錯誤的資料
UPDATE informations SET nom = 'SHIH',prenom ='Yu-Ju' WHERE id = '1';

#增加欄位
ALTER TABLE informations ADD mobile VARCHAR(100);

#會選出扣除重複的
SELECT DISTINCT nom from informations

#選擇排序
SELECT nom, adresse from informations ORDER BY nom DESC 

P.S 只有值的時候需要放''  如果是colum 不需要放的

#選擇什麼開頭的列
SELECT * FROM informations WHERE prenom like 'R%' 