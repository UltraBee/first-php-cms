
<?php
    include_once('includes/connection.php');
    include_once('includes/article.php');

    $article = new Article;
    $articles = $article->fetch_all();

?>

<?php include('header.php'); ?>

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

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
          <small><a href="admin">admin</a></small>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
