DELIMITER $$

CREATE PROCEDURE verifyLogin(IN _username VARCHAR(50), IN _password VARCHAR(50))

BEGIN

SELECT username, password FROM customer
WHERE username = _username AND
password = _password
LIMIT 1;

END $$

DELIMITER ;
