<?php
require('includes/db.php');
include('includes/function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
   <link rel="stylesheet" href="style.css">
   <title>Thành viên của Từ Tâm</title>

   <!-- Created by S-Tech04 -->
<style>
	@import url('https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
*
{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Bellota Text', cursive;
}
body
{
  
   justify-content: center;
   align-items: center;
   min-height: 100vh;
   width: 100%;
   background: #f2f3f7;
}
.container
{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
}
.container .card
{
   width: 330px;
   height: 416px;
   padding: 60px 30px;
   margin: 20px;
   background: #f2f3f7;
   box-shadow: 0.6em 0.6em 1.2em #d2dce9,
               -0.5em -0.5em 1em #ffffff;
   border-radius: 20px;
}
.container .card .content
{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
}
.container .card .content .imgBx
{
   width: 180px;
   height: 180px;
   border-radius: 50%;
   position: relative;
   margin-bottom: 20px;
   overflow: hidden;
}
.container .card .content .imgBx img
{
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   object-fit: cover;
}
.container .card .content .contentBx h4
{
   color: #36187d;
   font-size: 1.7rem;
   font-weight: bold;
   text-align: center;
   letter-spacing: 1px;
}
.container .card .content .contentBx h5
{
   color: #6c758f;
   font-size: 1.2rem;
   font-weight: bold;
   text-align: center;
}
.container .card .content .sci
{
   margin-top: 20px;
}
.container .card .content .sci a
{
   text-decoration: none;
   color: #6c758f;
   font-size: 30px;
   margin: 10px;
   transition: color 0.4s;
}
.container .card .content .sci a:hover
{
   color: #0196e3;
}
/*   colors
        #f2f3f7
        #d2dce9
        #36187d
        #6c758f
        #0196e3
 */
	</style>
</head>
<body>
	<div>
	<?php include_once('includes/navbar.php'); ?>
</div>
    <div class="container">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="./team1.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Nguyễn Văn An</h4>
                    <h5>Giám Đốc</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="./team2.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Bùi Trung Đức</h4>
                    <h5>Quản Lí</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="./team3.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Nguyễn Thị Mừng</h4>
                    <h5>Chuyên Viên Tư Vấn</h5>
                </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>

	<?php include_once('includes/footer.html'); ?>
</body>
</html>