INSERT INTO `produit` VALUES 
(1,'Titanic','Le film le plus romantique jamais réalisé.',1,0,'romance'),
(2,'Rapides et dangereux','Le film le plus rapide et dangereux. Vin Diesel est un badass. RIP Paul Walker',1.5,1,'action'),
(3,'John Wick','Un film avec plusieurs coups à la tête.',5,0,'shoot \'em up'),
(4,'21 et Plus','Une comédie sans rires.',0.01,1,'comédie'),
(5,'Le Seigneur des Anneaux','Le meilleur film.',100,0,'dabes');

INSERT INTO `employe` VALUES 
(1,'Bégin','Gabriel','madscientist','clubvideo1'),
(2,'Poulin','Marc-André','scurbs','clubvideo2'),
(3,'Macduff','Maverick','taterthug','clubvideo3'),
(4,'Vadnais','Philippe','webwiz','clubvideo4'),
(5,'Bédard','Isaac','swah','clubvideo5'),
(6,'Trudeau','Nicolas','numba1playa','clubvideo6'),
(7,'St-Jean','Trevor','t','clubvideo7'),
(8,'Rancourt','Paul','wifed','clubvideo8'),
(9,'Marc-André','Delorme','hackerman','clubvideo9');

INSERT INTO `transaction` VALUES 
(1,5,'McDank','Memerick','2017-03-23 11:11:11'),
(2,6,'Kek-Shoze','Alain','2017-03-21 14:53:24'),
(3,5,'Kun','Kel','2017-03-16 17:21:51');

INSERT INTO `transactionproduit` VALUES (1,3),(2,1),(3,5);
