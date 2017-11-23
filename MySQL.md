# Database 란?
  - 정보를 관리하는 전문 어플리케이션
- 장점
  - 안전하다
  - 빠르다 (index)
  - 프로그램적 제어가능
- 관계형 데이터 베이스
  - MySQL
  - MsSQL
  - Oracle

# MySQL
## 1. 이론
  - MySQL AB -> SUN -> Oracle
  - MariaDB (Oracle의 정책에 반해 MySQL개발자가 나와서 새롭게 만듬)
    - MySQL == MariaDB
  - SQL(Structured Query Language)
  - Database 동작 원리<br>
  MySQL client(Php) <------------> MySQL Server (MySQL)<br>
          SELECT * FROM topic; (SQL 명령어)
  - msSQL Server
    - Database
      - Tables (일종의 파일 같은 것)

#### MySQL monitor
  - command 창에서 실행
~~~
C:\Bitnami\wampstack-5.6.30-3\mysql\bin
~~~
  - mysql.exe 실행
~~~
mysql -hlocalhost -uroot -p
-h | mysql 서버의 주소
-u | mysql 서버의 사용자
-p | 비밀번호를 입력받기
~~~
  - Database 보기
~~~
show databases;
~~~
  - Database 생성
~~~
CREATE DATABASE opentutorials CHARACTER SET utf8 COLLATE utf8_general_ci;
CHARACTER SET | 기본 character set을 설정
COLLATE | 기본 collation 설정
~~~
  - 데이터베이스 선택
~~~
use opentutorials;
~~~
  - Table 생성
    - CREATE TABLE `table이름` ( )
    - NOT NULL : 반드시 ID 값이 존재해야 함
    - AUTO_INCREMENT : 행이 추가될 때마다 자동으로 숫자를 1씩 증가
    - text : 특정 사이즈의 char가 아닌 긴 글을 받을 수 있다.
~~~
CREATE TABLE `topic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~
  - Table 보기
~~~
show tables;
~~~
  - Table에 값 추가
~~~
INSERT INTO `topic` (`id`, `title`, `description`, `author`, `created`) VALUES(1, 'About JavaScript', '~~~', 'egoing', '2015-03-31 12:14:00');
~~~
  - Table data 가져오기
    - '*' : table colume에 해당
~~~
SELECT * FROM topci;
SELECT title, author from topic;
~~~

 
- | MySQL monitor | mysqli
---- | ---- | ---- 
서버접속 | mysql -hlocalhost -uroot -p123456; | $conn = mysqli_connect("localhost", "root", "123456");
DB 선택 |
조회 |
출력 |



# 명령어
name | Description
---- | ----
-h | mysql 서버의 주소
