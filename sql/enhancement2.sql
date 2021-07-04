-- Query #1
INSERT INTO clients (
		clientFirstname,
		clientLastname,
		clientEmail,
		clientPassword,
		comment
	) VALUE (
		'Tony',
		'Stark',
		'tony@starkent.com',
		'Iam1ronM@n',
		"I am the real Ironman"
	);
-- Query #2
UPDATE clients
SET clientLevel = 3
WHERE clientLevel = 1;
-- Query #3
UPDATE inventory
SET invDescription = 'Do you have 6 kids and like to go offroading? The Hummer gives you the spacious interior with an engine to get you out of any muddy or rocky situation.'
WHERE invModel = 'Hummer';
-- Query #4
SELECT inventory.invModel,
	carclassification.classificationName
FROM inventory
	INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId
WHERE carclassification.classificationName = "SUV";
-- Query #5
DELETE FROM inventory
WHERE invMake = 'Jeep';
-- Query #6
UPDATE inventory
SET invImage = CONCAT('/phpmotors', invImage),
	invThumbnail = CONCAT('/phpmotors', invThumbnail);