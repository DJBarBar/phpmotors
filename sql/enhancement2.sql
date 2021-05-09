INSERT INTO clients 
	(clientFirstname, clientLastname, clientEmail, clientPassword, comment)
	VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman');


UPDATE clients
	SET clientLevel = 3
	WHERE clientFirstname = 'Tony' AND clientLastname = 'Stark';


UPDATE inventory 
	SET invDescription = REPLACE(invDescription, 'small interior', 'spacious interior') 
	WHERE invMake = 'GM' AND invModel = 'Hummer';


SELECT i.invModel, c.classificationName
	FROM inventory i
	INNER JOIN carclassification c ON c.classificationId = i.classificationId
	WHERE c.classificationName = 'SUV';


DELETE FROM inventory WHERE invMake = 'Jeep' AND invModel = 'Wrangler';


UPDATE inventory i 
  SET i.invImage = CONCAT('/phpmotors', i.invImage), i.invThumbnail = CONCAT('/phpmotors', i.invThumbnail);