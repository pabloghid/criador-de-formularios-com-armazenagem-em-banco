-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2020 às 01:05
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

CREATE TABLE `nome_formulario` (
  `id` mediumint(9) NOT NULL,
  `nome_formulario` char(40) DEFAULT NULL,
  `nome_criador` char(40) DEFAULT NULL
);


ALTER TABLE `nome_formulario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nome_formulario`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;
