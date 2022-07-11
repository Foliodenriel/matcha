CREATE DATABASE IF NOT EXISTS matcha;

USE matcha;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    pseudo VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50),
    password VARCHAR(255),
    salt VARCHAR(255),
    birthdate DATETIME,
    score INT,
    gender TINYINT,
    sexual_interest TINYINT,
    bio TEXT,
    pictures TEXT,
    profile_picture TEXT,
    latitude TEXT,
    longitude TEXT,
    created_at DATETIME,
    updated_at DATETIME,
    deleted_at DATETIME,
    state TINYINT
);

CREATE TABLE IF NOT EXISTS tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS tags_users (
    id_user INT,
    id_tag INT
);

CREATE TABLE IF NOT EXISTS likes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user_actor INT,
    id_user_target INT,
    state TINYINT
);

CREATE TABLE IF NOT EXISTS matchs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user_a INT,
    id_user_b INT,
    state TINYINT
);

CREATE TABLE IF NOT EXISTS messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_match INT,
    id_sender INT,
    id_receiver INT,
    content TEXT,
    sent_at DATETIME,
    state TINYINT,
    is_read BOOLEAN
);

CREATE TABLE IF NOT EXISTS notifications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
    type TINYINT,
    id_ptable INT,
    created_at DATETIME,
    deleted_at DATETIME,
    is_read BOOLEAN
);