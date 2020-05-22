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
    requested_action VARCHAR(256) NOT NULL
);

--initial values

INSERT INTO document_owner (first_name, last_name) VALUES ('John', 'Doe');
INSERT INTO document_owner (first_name, last_name) VALUES ('Jamongus', 'Badongus');

INSERT INTO document (owner_id, document_name, requested_action) VALUES (1, 'Musings of the sole', 'copy');
INSERT INTO document (owner_id, document_name, requested_action) VALUES (2, 'To do list', 'delete');
INSERT INTO document (owner_id, document_name, requested_action) VALUES (2, 'My outlook on life', 'copy');