create database messages;
use messages;
create table message
(
    user_id  int primary key auto_increment not null,
    body text not null,
    uuid VARCHAR(255) not null unique,
    timeStamp DATETIME DEFAULT CURRENT_TIMESTAMP()
);
CREATE EVENT daily_deleting ON SCHEDULE EVERY 10080 MINUTE DO DELETE FROM message WHERE timeStamp < DATE_SUB(NOW(), INTERVAL 10080 MINUTE );


