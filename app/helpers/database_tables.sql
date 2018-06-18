CREATE DATABASE IF NOT EXISTS `containerdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `containerdb`;



-- Table structure for table Login
-- DROP TABLE IF EXISTS Login;
-- CREATE TABLE Login (
--   Login_ID int(10) AUTO_INCREMENT,
--   User_Name varchar(50) NOT NULL,
--   Password varchar(50) NOT NULL,
--   Email varchar(100) NOT NULL,
--   PRIMARY KEY ( Login_ID )
-- ) AUTO_INCREMENT = 1;
--  Clear data for table Login
--  TRUNCATE TABLE Login
--  INSERT INTO Login (Login_ID,User_Name,Password, Email) VALUES
--  (1, 'Nikhil','passw' , 'emapl@gmail.com'),
--  (2, 'Adam','adam' ,'adam@gmail.com'),
--  (3, 'Baker','baker' , 'Baker@gmail.com'),
--  (4, 'Clark', 'clark','clark@gmail.com'),
--  (5, 'Davis', 'davis','davis@gmail.com'),
--  (6, 'Frank', 'frank','frank@gmail.com');
-- select * from Login


--  -- Table structure for table  Feedback 
--  DROP TABLE IF EXISTS  Feedback ;
--  CREATE TABLE  Feedback  (
--     Feedback_ID  int(11) AUTO_INCREMENT ,
--     Login_ID  int(10)  NULL,
--     FNAME  varchar(50) NULL ,
--     LNAME  varchar(50) NULL,
--     Email  varchar(50) NOT NULL,
--     Rating  int(10) NOT NULL,
--     Message  varchar(255) NULL ,
--    PRIMARY KEY (  Feedback_ID  )
--  ) AUTO_INCREMENT = 1;
--  -- Clear data for table  Feedback 
--  TRUNCATE TABLE  Feedback 
--  INSERT INTO  Feedback  (  Login_ID ,  FNAME , LNAME , Email , Rating , Message ) VALUES
--   (1,'Nikhil','kamble','nikhil@gmail.com',7, 'This is a very good website');

-- select * from Feedback



-- Table structure for table  NavLinks 
--     Drop table IF EXISTS  NavLinks ;
    -- CREATE TABLE  NavLinks  (
    --  ID  int(10) AUTO_INCREMENT,
    --  Name  varchar(12) NOT NULL,
    --  Links  varchar(100) NOT NULL,
    --  PRIMARY KEY (  ID  )
    --  )AUTO_INCREMENT = 1;
     -- Clear data for table  NavLinks 
 -- TRUNCATE TABLE  NavLinks 
--  INSERT INTO  NavLinks  ( Name , Links ) VALUES
--  ('Home','index'),
--  ('About','pages/About'),
--  ('Contact','pages/Contact'),
--  ('FAQS','pages/FAQS')
-- select * from NavLinks




    -- DROP TABLE IF EXISTS pages;
    -- CREATE TABLE pages (
    -- ID INT(11) AUTO_INCREMENT,
    -- Name varchar(100) NOT NULL,
    -- CONTENT TEXT NULL,
    -- PRIMARY KEY (ID)
    -- )AUTO_INCREMENT = 1;

 -- Clear data for table pages
--  TRUNCATE TABLE pages
    --  INSERT INTO pages (  Name ,  CONTENT ) VALUES
    --  ('About','  <div class="container">
    --             <div class="row">
    --                 <div class="col">
    --                     <h1 class="text-center">About Us</h1>
    --                     <p class="text-center">
    --                         <br>We provide information about Movies and Tv shows , it''s title , Relesase date, Runtime, Genre, Writer, Actors, it''s Plot, Country, Launguage, Awards and Ratings for imdb.
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --             </div>
    --         </div>
    --         <div class="container">
    --             <div class="row">
    --                 <div class="col">
    --                     <h1 class="text-center">Services</h1>
    --                     <p class="text-center">
    --                         <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
    --                         massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
    --                         quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
    --                         pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --             </div>
    --         </div>'),
    --  ('Contact',' <div class="row">
    --                 <div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
    --                     <p class="test-center">&nbsp;Address:200 Cameron Rd Tauranga, 3110
    --                         <br>&nbsp;E-mail:support.moviedb@moviedb.com<br>
    --                         Telephone:210000000<br>
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --                 <div class="col col-lg-6 col-md-6 col-sm-12">
    --                     <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD8cVlZd_64aREk4Ijc_ocVVsVbOt4UISI&amp;q=200+cameron+raod&amp;zoom=14"></iframe>
    --                 </div>
    --             </div>'),
    --  ('FAQS','<div class="container">
    --             <div class="row">
    --                 <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
    --                     <h6>
    --                         <br>How do i Search for movies?
    --                         <br>
    --                         <br>
    --                     </h6>
    --                     <p class="text-center">
    --                         <br>Click on home in the Navigation bar or click the Icon of Moviedb and when on homepage scroll down where you see serach bar and write the name of the movie 
    --                         you want and click search it will show up with the result.
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --                 <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
    --                     <h6>
    --                         <br>Why do we use it?
    --                         <br>
    --                         <br>
    --                         <br>
    --                     </h6>
    --                     <p>
    --                         <br>It is easy to use and i have put in a lot of time to make it so you should use it. :)
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --                 <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
    --                     <h6>
    --                         <br>
    --                         <br>Where does it come from?
    --                         <br>
    --                         <br>
    --                     </h6>
    --                     <p>
    --                         <br>We are using a api which is provided by <a href="http://www.omdbapi.com/">http://www.omdbapi.com</a> and our website is just handling the request &nbsp;
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --             </div>
    --             <div class="row">
    --                 <div class="col col-lg-4 col-sm-6  col-12">
    --                     <h6>
    --                         <br>I am not able to find the movie i search for?
    --                         <br>
    --                         <br>
    --                     </h6>
    --                     <p>We are still improving the APi it will provide more movies/Tv shows in future
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --                 <div class="col col-lg-4 col-sm-6 col-12">
    --                     <h6>How would i know if i am already a registered user?</h6>
    --                     <p>
    --                         <br>When you click sign up when you first visit this website, Fill in all the deatils and click sign up and you will be redirected to homepage when you click the sign up button it will show with with a message thank you for signing &nbsp;
    --                         <br>
    --                     </p>
    --                 </div>
    --                 <div class="col-lg-4  col-sm-6 col-12">
    --                     <h6>I am not able to login?</h6>
    --                     <p>
    --                         <br>This could be because you did not sign up or the web servers are under maintance/the login database is down.
    --                         <br>
    --                         <br>
    --                     </p>
    --                 </div>
    --             </div>
    --         </div>')




-- select * from pages

--  DROP TABLE IF EXISTS  testimonials ;
-- CREATE TABLE  testimonials  (

--     ID INT(11) AUTO_INCREMENT,
--     CONTENT TEXT(500) NULL,
--     image TEXT(150) NULL,
--     NAME TEXT(100) NULL,
--     Designation TEXT(100) NULL,
--     PRIMARY KEY (ID)
-- ) AUTO_INCREMENT = 1;
--  -- Clear data for table  testimonials 
--  TRUNCATE TABLE  testimonials 
--  INSERT INTO  testimonials  (  CONTENT ,  image , NAME , Designation ) VALUES
--  ('
--                                 <br> We made this website so it is easy to know the details of movies/Tv shows
--                                 <br>
--                                 <br>
--                             </p>','https://placeimg.com/200/220/animals','Bob','Owner of the page'),
--  ('
--                                 <br>Thank you, it was easy to use
--                                 <br>
--                                 <br>
--                             </p>','https://placeimg.com/200/220/animals1','john','User of the page'),
--  ('
--                                 <br>The design is still at it''s beta stages we will improve the design in coming future
                                
--                                 <br>
--                                 <br>
--                             </p>',' https://placeimg.com/200/220/animals2','Lisa','Designer of the page')
 

-- select * from testimonials







-- DROP TABLE IF EXISTS Contact;

-- CREATE TABLE Contact (
-- ID INT(11) AUTO_INCREMENT,
--     FNAME VARCHAR(40) ,
--     Email VARCHAR(100),
--     Message TEXT(500),
--     PRIMARY KEY (ID)
-- ) AUTO_INCREMENT = 1;
--  -- Clear data for table  Contact 
--  -- TRUNCATE TABLE  Contact 


-- select * from Contact


















