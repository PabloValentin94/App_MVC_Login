/*

Métodos de criptografia de dados:

	MD5("") -> permite apenas a criptograficação, não sendo possível, internamente, descriptografar.
    
    AES -> é composto por duas funções. Veja:
    
		AES_ENCRYPT("", "") -> função de criptograficação.
        
        AES_DECRYPT("", "") -> função de descriptograficação.
        
        O segundo parâmetro refere-se a uma chave de acesso.
        
Fonte: https://www.devmedia.com.br/introducao-a-criptografia-no-mysql/37179

*/

USE db_login;

INSERT INTO usuario(nome_usuario, email, senha) VALUES("Pablo", "teste1@gmail.com", MD5("211066"));

SELECT * FROM usuario;