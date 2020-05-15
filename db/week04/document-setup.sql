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
    user_id INT NOT NULL REFERENCES document_owner(id),
    document_name VARCHAR(256) NOT NULL UNIQUE,
    requested_action VARCHAR(256) NOT NULL
);

--initial values

