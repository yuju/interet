SELECT * FROM marqueur;

SELECT m.nom, type, pays, latitude, longitude, p.nom AS nom_pays 
FROM marqueur m, pays p  
WHERE pays = code;

SELECT m.id, m.nom, type, ville, p.nom AS nom_pays, mu.date, u.login 
FROM marqueur m, pays p, marqueur_usager mu, usager u 
WHERE (m.pays = p.code) AND  (m.id = mu.id_marqueur) AND (mu.id_usager = u.id);