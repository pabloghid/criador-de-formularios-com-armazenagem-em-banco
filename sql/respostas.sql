CREATE TABLE `respostas` (
     `id` mediumint(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     `id_formulario` mediumint(9) NOT NULL, `id_pergunta` mediumint(9) NOT NULL,
     `resposta_texto` char(40) DEFAULT NULL,
     `resposta_opcao` int(1) DEFAULT NULL );

ALTER TABLE `respostas` ADD CONSTRAINT `fk_nomeformulario` FOREIGN KEY (`id_formulario`) REFERENCES `nome_formulario` (`id`);

ALTER TABLE `respostas` ADD CONSTRAINT `fk_perguntas` FOREIGN KEY (`id_pergunta`) REFERENCES `perguntas` (`id`);

ALTER TABLE `respostas` CHANGE `resposta_texto` `resposta_texto` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL; 
ALTER TABLE `respostas` CHANGE `resposta_opcao` `resposta_opcao` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL; 