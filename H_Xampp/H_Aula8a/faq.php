<?php
session_start();
require 'header.php';
if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
    header("Location: entrar.php");
  }
?>
<div class="faq">
            <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">FAQs</h1>
            </div>
            <img class="mx-auto img-lorem img-thumbnail m-1 rounded d-block text-center" src="cityoftears.webp" alt="" style = "width:600px ">
            <ol>
            <b><li><p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequatur architecto aut excepturi veniam similique sunt neque, ducimus cum natus ipsam quisquam doloribus sit eum soluta. Tempora autem quo adipisci?
            </p></li></b>
<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum dolorem vero dolor recusandae ratione sunt architecto veniam expedita, suscipit eligendi est animi numquam laudantium assumenda exercitationem autem deleniti perspiciatis optio. </p>
            <b><li><p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut aliquid sed, laboriosam optio in consequatur nulla dignissimos soluta dolorem. Odio repellat blanditiis sed iure. Dolore laudantium nostrum ratione minima?
            </p></li></b>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, saepe quibusdam eaque incidunt deleniti consequatur ex necessitatibus esse ipsam quidem, ea impedit possimus libero quo culpa cum dolorem beatae porro!</p>
            <b><li><p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequatur architecto aut excepturi veniam similique sunt neque, ducimus cum natus ipsam quisquam doloribus sit eum soluta. Tempora autem quo adipisci?
            </p></li></b>
<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum dolorem vero dolor recusandae ratione sunt architecto veniam expedita, suscipit eligendi est animi numquam laudantium assumenda exercitationem autem deleniti perspiciatis optio. </p>
            <b><li><p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ut aliquid sed, laboriosam optio in consequatur nulla dignissimos soluta dolorem. Odio repellat blanditiis sed iure. Dolore laudantium nostrum ratione minima?
            </p></li></b>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, saepe quibusdam eaque incidunt deleniti consequatur ex necessitatibus esse ipsam quidem, ea impedit possimus libero quo culpa cum dolorem beatae porro!</p>
</ol>
        </div>
        <?php
require 'footer.php';
?>