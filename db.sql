CREATE DATABASE backend_ultimate_team;
USE backend_ultimate_team;

CREATE TABLE clubs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_club VARCHAR(100),
    logo VARCHAR(255)
);

CREATE TABLE nationality (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_natio VARCHAR(100),
    flag VARCHAR(255)
);

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_club INT,
    id_natio INT,
    photo VARCHAR(255),
    position VARCHAR(100),
    statue VARCHAR(100),
    deleted_at DATETIME DEFAULT NULL,
    INDEX (deleted_at),
    FOREIGN KEY (id_club) REFERENCES clubs(id),
    FOREIGN KEY (id_natio) REFERENCES nationality(id)
);

CREATE TABLE goalkeeper (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    rating INT CHECK (rating BETWEEN 10 AND 99),
    diving INT CHECK (diving BETWEEN 10 AND 99),
    handling INT CHECK (handling BETWEEN 10 AND 99),
    kicking INT CHECK (kicking BETWEEN 10 AND 99),
    reflexes INT CHECK (reflexes BETWEEN 10 AND 99),
    speed INT CHECK (speed BETWEEN 10 AND 99),
    positioning INT CHECK (positioning BETWEEN 10 AND 99),
    FOREIGN KEY (id_player) REFERENCES players(id) ON DELETE CASCADE
);

CREATE TABLE other_players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_player INT,
    rating INT CHECK (rating BETWEEN 10 AND 99),
    pace INT CHECK (pace BETWEEN 10 AND 99),
    shooting INT CHECK (shooting BETWEEN 10 AND 99),
    passing INT CHECK (passing BETWEEN 10 AND 99),
    dribbling INT CHECK (dribbling BETWEEN 10 AND 99),
    defending INT CHECK (defending BETWEEN 10 AND 99),
    physical INT CHECK (physical BETWEEN 10 AND 99),
    FOREIGN KEY (id_player) REFERENCES players(id) ON DELETE CASCADE
);

-- insertion des donner depui fichier json  

INSERT INTO clubs (name_club, logo) VALUES
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png');


INSERT INTO nationality (nom_natio, flag) VALUES
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png');


INSERT INTO players (id_club, id_natio, photo, position, statue) VALUES
(1, 1, 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', 'not_active'),
(2, 2, 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', 'not_active'),
(3, 3, 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', 'not_active'),
(4, 4, 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST', 'not_active'),
(5, 5, 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB', 'not_active'),
(6, 6, 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB', 'not_active'),
(7, 7, 'https://cdn.sofifa.net/players/190/871/25_120.png', 'LW', 'not_active'),
(8, 8, 'https://cdn.sofifa.net/players/192/985/25_120.png', 'RW', 'not_active'),
(9, 9, 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', 'not_active'),
(10, 10, 'https://cdn.sofifa.net/players/177/003/25_120.png', 'CM', 'not_active'),
(11, 11, 'https://cdn.sofifa.net/players/238/794/25_120.png', 'LW', 'not_active'),
(12, 12, 'https://cdn.sofifa.net/players/231/410/25_120.png', 'LW', 'not_active'),
(13, 4, 'https://cdn.sofifa.net/players/165/153/25_120.png', 'ST', 'not_active'),
(14, 13, 'https://cdn.sofifa.net/players/239/085/25_120.png', 'ST', 'not_active'),
(15, 4, 'https://cdn.sofifa.net/players/215/914/25_120.png', 'CDM', 'not_active'),
(16, 14, 'https://cdn.sofifa.net/players/234/396/25_120.png', 'LB', 'not_active');


INSERT INTO goalkeeper (id_player, rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
(10, 91, 90, 88, 91, 92, 60, 91),
(11, 87, 85, 80, 82, 89, 55, 88);

INSERT INTO other_players (id_player, rating, pace, shooting, passing, dribbling, defending, physical) VALUES
(1, 93, 85, 92, 91, 95, 35, 65),
(2, 91, 84, 94, 82, 87, 34, 77),
(3, 91, 74, 86, 93, 88, 64, 78),
(4, 92, 97, 89, 80, 92, 39, 77),
(5, 90, 75, 60, 70, 72, 92, 86),
(6, 88, 82, 55, 73, 70, 86, 86),
(7, 90, 91, 83, 86, 94, 37, 61),
(8, 89, 93, 87, 81, 90, 45, 75),
(9, 89, 70, 75, 88, 84, 84, 81),
(10, 91, 0, 0, 0, 0, 89, 92),
(11, 88, 74, 78, 89, 90, 72, 65),
(12, 89, 91, 88, 85, 94, 39, 61),
(13, 82, 85, 74, 78, 85, 31, 56),
(14, 90, 77, 90, 83, 88, 40, 78),
(15, 91, 89, 94, 65, 80, 45, 88),
(16, 87, 77, 66, 75, 82, 88, 82),
(17, 84, 96, 68, 77, 82, 76, 80);
