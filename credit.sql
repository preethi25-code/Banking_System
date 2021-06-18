CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `sender` varchar(15) NOT NULL,
  `receiver` varchar(35) NOT NULL,
  `trans_amount` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_credits` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `user_credits`) VALUES
(1, 'Naveena', 'navi010@gmail.com', 68025),
(2, 'Pari', 'pari020@gmail.com', 50005),
(3, 'Usha', 'usha030@gmail.com', 60020),
(4, 'Riya', 'riya040@gmail.com', 10028),
(5, 'Abishek', 'abishek050@gmail.com', 25786),
(6, 'Ranjit', 'ranjit060@yahoo.com', 4350),
(7, 'Roshini', 'roshini070@gmail.com', 69841),
(8, 'Sunitha', 'sunitha080@gmail.com', 3654),
(9, 'Lily', 'lily090@yahoo.com', 45136),
(10, 'Adhi', 'adhi010@gmail.com', 7632);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;



