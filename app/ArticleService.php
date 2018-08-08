<?php
namespace App\Services;
use App\Article;



class ArticleService {

  public function all(): array {
      return Article::all()->sortByDesc('created_at')
                            ->values()
                            ->all();
    }

    public function make(string $title, string $author, string $body): Article {
      $article = new Article();
      $article->title = $title;
      $article->author = $author;
      $article->body = $body;
      $article->save();

      return $article;
    }

    public function update(Article $article, string $title, string $author, string $body){
      $article->title = $title;
      $article->author = $author;
      $article->body = $body;
      $article->save();
    }

  /**
   * @param Article $article
   * @throws \Exception
   */
  public function delete(Article $article) {
      $article->delete();
    }


}