
<?php
    include_once('includes/connection.php');
    include_once('includes/article.php');

    $article = new Article;
    $articles = $article->fetch_all();

?>

<?php include('header.php'); ?>

 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto"> 
      <?php foreach ($articles as $article) { ?>    
        <div class="post-preview">
            <a href="article.php?id=<?php echo $article['article_id']; ?>">
                <h2 class="post-title">
                    <?php echo $article['article_title']; ?>
                </h2>         
            
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up - TO DO!!!!!
            </h3>
            </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on <?php echo date('l jS', $article['article_timestamp']); ?></p>
        </div>
        <hr>
      <?php } ?>

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <hr>

<?php include('footer.php'); ?>
