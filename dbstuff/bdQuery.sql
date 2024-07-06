CERATE TABLE `Users`(
    `uid` int (11) NOT NULL AUTO INCREMENT,
    `email` varchar(255) NOT NULL,
    `fname` varchar(255) NOT NULL,
    `lname` varchar(255) NOT NULL,
    `pass` varchar(255) NOT NULL,
    `joined_date` date NOT NULL,
    `uHash` varchar(255) NOT NULL,
    PRIMARY KEY (uid),
    UNIQUE (email)


) ENGINE = InnoDB DEFAULT CHARSET = utf8;