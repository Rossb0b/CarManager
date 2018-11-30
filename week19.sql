CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `color` varchar(10) NOT NULL,
  `wheel` int(11) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

