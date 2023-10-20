--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `num_email` varchar(70) NOT NULL,
  `nome_completo` varchar(70) NOT NULL,
  `nome_usuario` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `num_email`, `nome_completo`, `nome_usuario`, `senha`) VALUES
(1, '11910302041', 'Nicholas Alexandre Machado', 'nicholas_slv', '123'),
(2, 'a', 'a', 'a', 'assa'),
(3, 'adfs', 'sdf', 'dsaf', '7815696ecbf1c96e6894'),
(4, 'sdfsaf', 'sadf', 'sdf', '05c12a287334386c9413'),
(5, 'asdf', 'asdf', 'sdaf', 'fe6d1fed11fa60277fb6'),
(6, 'dsaf', 'sdaf', 'sdaf', 'fe6d1fed11fa60277fb6'),
(7, '11111111\'', 'Nicholas skasd', 'Nicholas', '202cb962ac59075b964b'),
(10, 'Nicholas@gmail.com', 'Nicholas Alexandre', 'Sla_1234', '202cb962ac59075b964b');

--
-- Ãndices para tabelas despejadas
--

--
-- Ãndices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
