SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION; 
SET time_zone = "+03:00";

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `nome` varchar(255) NOT NULL,
    `telefone` varchar(13) NOT NULL,
    `data_nascimento` date NOT NULL,
    `email` varchar(255) NOT NULL,
    `sexo` varchar(15) NOT NULL,
) ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;