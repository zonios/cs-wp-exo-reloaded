<?php
header('content-type: text/css');
?>
.single-post-container {
  margin-top: 106px;
}

.post-thumbnail {
  text-align: center;
  margin-bottom: 30px;
  padding-top: 40px;
}

.page-banner {
  height: 60vh;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.page-banner h1 {
  font-size: 65px;
  color: black;
  background-color: #00000050;
  padding: 20px 40px;
}
#test {
  color: <?php get_theme_mod('color-h1','#000000')?>;
  background-color: <?php  get_theme_mod('color-h1','#000000')?>;
} 