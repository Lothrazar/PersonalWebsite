
--https://dev.mysql.com/doc/refman/5.1/en/create-table.html


-- SHOW TABLES;

-- DESCRIBE tblname;


CREATE SCHEMA IF NOT EXISTS public;


CREATE TABLE IF NOT EXISTS public.article(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    published_on DATE NOT NULL,
    content TEXT NOT NULL
);