1.
INSERT INTO `clients` (
		`clientFirstname`,
		`clientLastname`,
		`clientEmail`,
		`clientPassword`,
		`clientLevel`,
		`comment`
	)
VALUES (
		'Tony',
		'Stark',
		'tony@starkent.com',
		'Iam1ronM@n',
		'1',
		'\"I am the real Ironman\"'
	);
2.
UPDATE `clients`
SET `clientLevel` = '3'
WHERE `clients`.`clientId` = 1;
3.
UPDATE inventory
SET invDescription = REPLACE(invDescription, 'small', 'spacious')
WHERE invId = 12;
4.
SELECT inventory.invModel,
	carclassification.classificationName
FROM carclassification
	INNER JOIN inventory ON inventory.classificationId = carclassification.classificationId
WHERE classificationName = 'SUV';
5.
DELETE FROM `inventory`
WHERE `inventory`.`invId` = 1;
6.
UPDATE inventory
SET invImage = concat('/phpmotors', invImage),
	invThumbnail = concat('/phpmotors', invThumbnail);