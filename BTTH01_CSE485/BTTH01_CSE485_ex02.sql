CREATE DATABASE BTTH01_CSE485;
USE BTTH01_CSE485;

CREATE TABLE tacgia (
  ma_tgia INT UNSIGNED PRIMARY KEY,
  ten_tgia VARCHAR(100),
  hinh_tgia VARCHAR(100)
);

CREATE TABLE theloai (
  ma_tloai INT UNSIGNED PRIMARY KEY,
  ten_tloai VARCHAR(50)
);

CREATE TABLE baiviet (
  ma_bviet INT UNSIGNED PRIMARY KEY,
  tieude VARCHAR(200),
  ten_bhat VARCHAR(100),
  ma_tloai INT UNSIGNED,
  tomtat TEXT,
  FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);

CREATE TABLE noidung (
  ma_ndung INT UNSIGNED PRIMARY KEY,
  ma_bviet INT UNSIGNED,
  noidung TEXT,
  ngayviet DATETIME,
  hinhanh VARCHAR(200),
  FOREIGN KEY (ma_bviet) REFERENCES baiviet(ma_bviet)
);

CREATE TABLE users (
  user_id INT UNSIGNED PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50)
);