-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 22, 2019 at 09:20 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tvseries`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `user_id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`user_id`, `name`, `email`, `dob`) VALUES
(3, 'Fabricio', 'fabri.barros@gmail.com', 1981),
(6, 'John', 'john@yahoo.com', 2007),
(7, 'Fabricio', 'fabri.barros@gmail.com', 1981);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `serie_id` int(100) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `genre` varchar(200) DEFAULT NULL,
  `createdby` varchar(200) DEFAULT NULL,
  `seasons` int(100) DEFAULT NULL,
  `executiveproducer` varchar(200) DEFAULT NULL,
  `releasedate` date DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `sinopsis` varchar(1000) DEFAULT NULL,
  `ranking` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`serie_id`, `title`, `genre`, `createdby`, `seasons`, `executiveproducer`, `releasedate`, `rate`, `sinopsis`, `ranking`) VALUES
(1, 'The Handmaid\'s Tale', 'Drama', 'Bruce Miller', 2, 'Bruce Miller, Warren Littlefield, Reed Morano, Daniel Wilson, Fran Sears, Ilene Chaiken', '2017-04-26', 5, 'Set in a dystopian future, a woman is forced to live as a concubine under a fundamentalist theocratic dictatorship.', 1),
(2, 'How to Get Away With Murder', 'Drama', 'Peter Nowalk', 5, 'Shonda Rhimes, Betsy Beers, Bill D\'Elia', '2014-09-25', 5, 'A group of ambitious law students and their brilliant criminal defense professor become involved in a twisted murder plot that promises to change the course of their lives.', 2),
(3, 'Game of Thrones', 'Fantasy', 'David Benioff', 7, 'David Benioff, D. B. Weiss, Carolyn Strauss, Frank Doelger, Bernadette Caulfield, George R. R. Martin', '2011-04-17', 5, 'Nine noble families fight for control over the mythical lands of Westeros, while an ancient enemy returns after being dormant for thousands of years.', 3),
(4, 'Sharp Objects', 'Psychological thriller', 'Marti Noxon', 1, 'Charles Layton\r\nMarci Wiseman\r\nJessica Rhoades\r\nGregg Fienberg, Nathan Ross, Jean-Marc Vallée, Amy Adams, Gillian Flynn, Jason Blum, Marti Noxon', '2018-07-08', 4, 'A reporter confronts the psychological demons from her past when she returns to her hometown to cover a violent murder.', 4),
(5, 'Narcos', 'Crime drama', 'Chris Brancato, Carlo Bernard, Doug Miro', 3, 'Chris Brancato, Carlo Bernard, Doug Miro, Katie O\'Connell, Eric Newman, José Padilha, Elisa Todd Ellis', '2015-08-28', 4, 'A chronicled look at the criminal exploits of Colombian drug lord Pablo Escobar, as well as the many other drug kingpins who plagued the country through the years.', 5),
(6, 'The Walking Dead', 'Horror', 'Frank Darabont', 9, 'Frank Darabont, Gale Anne Hurd, David Alpert, Robert Kirkman, Charles H. Eglee, Glen Mazzara, Scott M. Gimple, Greg Nicotero, Tom Luse, Denise Huth\r\nAngela Kang', '2010-10-31', 4, 'Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins, and must lead a group of survivors to stay alive.', 6),
(7, 'Friends', 'Sitcom', 'David Crane, Marta Kauffman', 10, 'David Crane, Marta Kauffman, Kevin S. Bright', '1994-09-22', 4, 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.', 7),
(8, 'The Big Bang Theory', 'Sitcom', 'Chuck Lorre, Bill Prady', 12, 'Chuck Lorre, Steven Molaro, Bill Prady, Eric Kaplan', '2007-09-24', 4, 'A woman who moves into an apartment across the hall from two brilliant but socially awkward physicists shows them how little they know about life outside of the laboratory.', 8),
(9, 'House Of Cards', 'Political drama', 'Beau Willimon', 6, 'David Fincher, Eric Roth, Joshua Donen, Dana Brunetti, Andrew Davies, Michael Dobbs', '2013-02-01', 3, 'A Congressman works with his equally conniving wife to exact revenge on the people who betrayed him.', 9),
(10, 'Big Little Lies', 'Drama', 'David E. Kelley', 1, 'David E. Kelley, Jean-Marc Vallée, Reese Witherspoon, Bruna Papandrea, Nicole Kidman, Per Saari, Gregg Fienberg, Nathan Ross', '2017-02-19', 3, 'The apparently perfect lives of three mothers of first graders unravel to the point of murder.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `login`, `password`) VALUES
(1, 'Fabricio', 'Barros', 'fabriciobarros', '12345'),
(2, 'Administrator', 'CCT', 'admin', 'cctwebdevca2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`serie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `serie_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
