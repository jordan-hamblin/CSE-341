-- clean up

DROP TABLE If Exists document;
DROP TABLE If Exists document_owner;

-- setup

CREATE TABLE document_owner (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(256) NOT NULL,
    last_name VARCHAR(256) NOT NULL
);

CREATE TABLE document (
    id SERIAL PRIMARY KEY,
    owner_id INT NOT NULL REFERENCES document_owner(id),
    document_name VARCHAR(256) NOT NULL UNIQUE,
    document_content VARCHAR(256) NOT NULL
);

--initial values

INSERT INTO document_owner (first_name, last_name) VALUES ('John', 'Doe');
INSERT INTO document_owner (first_name, last_name) VALUES ('Jamongus', 'Badongus');

INSERT INTO document (owner_id, document_name, document_content) VALUES (1, 'Musings of the sole', 'To be or not to be?');
INSERT INTO document (owner_id, document_name, document_content) VALUES (2, 'To do list', 'I should really finish this assignment');
INSERT INTO document (owner_id, document_name, document_content) VALUES (2, 'My outlook on life', 'This life is the time to prepare to meet God');
