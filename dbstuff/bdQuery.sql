-- initital tables

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Users` (
    `uid` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `fname` varchar(255) NOT NULL,
    `lname` varchar(255) NOT NULL,
    `pass` varchar(255) NOT NULL,
    `joined_date` date NOT NULL,
    `uHash` varchar(255) NOT NULL,
    PRIMARY KEY (`uid`),
    UNIQUE (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Topic Table
CREATE TABLE `Topics` (

    `tid` int(11) NOT NULL AUTO_INCREMENT,
    `topicName` varchar(255) NOT NULL,
    PRIMARY KEY (tid)

) ENGINE = InnoDB DEFAULT CHARSET = utf8; 

-- Question Table 

CREATE TABLE `Question`(
    `qid` int (11) NOT NULL AUTO_INCREMENT,
    `uid` int (11) NOT NULL ,
    `tid` int (11) NOT NULL ,
    `question` TEXT,
    `explanation` TEXT,
    `askDate` TEXT,
    `qHashs` varchar(255) NOT NULL,
    `joined_date` date NOT NULL,
    `uHash` varchar(255) NOT NULL,
    PRIMARY KEY (qid),
    FOREIGN KEY (uid) REFERENCES Users (uid),
    FOREIGN KEY (tid) REFERENCES Topics (tid)

) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- answer
CREATE TABLE `Answer`(
    `aid` int (11) NOT NULL AUTO_INCREMENT,
    `uid` int (11) NOT NULL ,
    `qid` int (11) NOT NULL ,
    `answer` TEXT,
    `uHash` varchar(255) NOT NULL,
    PRIMARY KEY (aid),
    FOREIGN KEY (uid) REFERENCES Users (uid),
    FOREIGN KEY (qid) REFERENCES Question(qid)

) ENGINE = InnoDB DEFAULT CHARSET = utf8;





