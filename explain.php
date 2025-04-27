・投稿の表示の考え方
WordPressのページの考え方
1,固定ページ
・front-page.php
・humanstemcells.php
・improvement.php
2,投稿ページ
 2-1,通常の投稿
 →今回はこれを使う
 2-2,カスタム投稿


・実際の表示の仕方

💡補足：日付のフォーマット
Y：西暦（4桁） → 2025

m：月（2桁） → 04

d：日（2桁） → 20

---------

復習 STEP1
  <!-- 投稿がありますか？ -->
  <?php if ( have_posts() ) : ?>
    <ul>
      <!-- 投稿全体に対して、1記事ごとに処理 -->
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <!-- the_permalink=記事のリンク、the_title=記事のタイトル -->
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <!-- the_excerpt=記事の本文 -->
          <p><?php the_excerpt(); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>
  <!-- 記事がなければこれを出す -->
  <?php else : ?>
    <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>


STEP2
  <!-- どの投稿を表示するかの条件付け -->
  <?php
    $args = array(
      'post_type'      => 'post',//投稿タイプは通常
      'posts_per_page' => 5,//表示する投稿数
      'orderby'        => 'modified', // 更新日の順番
      'order'          => 'DESC',//降順（大きい（新しい）→小さい（古い））
    );
    // 上の条件を元に、投稿を取得
    $latest_posts = new WP_Query( $args );
  ?>

  <?php if ( $latest_posts->have_posts() ) : ?>
    <ul>
      <?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p>最終更新日：<?php the_modified_date('Y年n月j日'); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>

  <?php wp_reset_postdata(); ?>