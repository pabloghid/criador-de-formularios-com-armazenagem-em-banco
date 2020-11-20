CREATE TABLE `perguntas` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id_formulario` MEDIUMINT(6) DEFAULT NULL,
  `pergunta` text DEFAULT NULL,
  `is_texto` char(1) DEFAULT NULL,
  `is_opcao` char(1) DEFAULT NULL,
  `resposta_opcao1` text DEFAULT NULL,
  `resposta_opcao2` text DEFAULT NULL,
  `resposta_opcao3` text DEFAULT NULL,
  `resposta_opcao4` text DEFAULT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE `perguntas` ADD CONSTRAINT `fk_formulario` FOREIGN KEY (`id_formulario`) REFERENCES `nome_formulario` (`id`);