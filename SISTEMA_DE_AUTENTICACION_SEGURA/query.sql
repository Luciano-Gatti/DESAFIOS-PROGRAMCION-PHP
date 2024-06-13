USE php_course;

CREATE TABLE users (
    user_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(50) NOT NULL,
    password VARCHAR(85) NOT NULL,
    role_id INT(11),
    FOREIGN KEY (roles_id) REFERENCES roles(role_id)
);

CREATE TABLE roles (
    role_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50) NOT NULL
);

CREATE TABLE permissions (
    permissions_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    permissions_name VARCHAR(50) NOT NULL
);

CREATE TABLE role_permissions (
    role_id INT(11),
    permissions_id INT(11),
    PRIMARY KEY (role_id, permissions_id),
    FOREIGN KEY (role_id) REFERENCES roles(role_id),
    FOREIGN KEY (permissions_id) REFERENCES permissions(permissions_id)
);

INSERT INTO roles VALUES ('admin'), ('user');

INSERT INTO permissions VALUES ('view_profile'), ('edit_profile'), ('delete_profile');

INSERT INTO role_permissions VALUES (1, 1) (1, 2) (1, 3) (2, 1);

INSERT INTO user VALUES 
('user1', '$argon2i$v=19$m=65536,t=4,p=1$NGNoZTN3dTQuWEZrdGwyNg$qMdgxplZSQ+99Nk9VCbN/oKbzMgkZqbLb7GCbITXqz0', 1),
('user2', '$argon2i$v=19$m=65536,t=4,p=1$UHg5SExaTGYxbGVMSVA3VQ$6iKxOuHnmHIJNokbR6Tr/2e7IO0S5M11/R2e/U3JUbY', 2);