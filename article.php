<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    ?>

    <?php include('header.php'); ?>

        <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
                <h1><?php echo $data['article_title']; ?></h1>
                <h2 class="subheading">Problems look mighty small from 150 miles up - TO DO!!</h2>
                <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on <?php echo date('l jS', $data['article_timestamp']); ?></span>
            </div>
            </div>
        </div>
        </div>
    </header>


            

    <!-- Post Content -->
    <article>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo $data['article_content']; ?></p>
            </div>
        </div>
        </div>
        
    </article>
    <hr>
    
    
    <?php include('footer.php'); ?>

<?php
    } else {
        header('Location: index.php');
        exit();
    }
?>